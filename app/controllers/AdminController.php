<?php

class AdminController extends AdminBase
{

    public function indexAction()
    {

    }

    /*
    * Question Admin
    * list all questions
    */
    public function listQuestionAction()
    {
        $list = Question::find(array("order" => "id DESC"));
        $this->view->list = $list;
        
    }

    /*
    * Question Admin
    * add question
    */
	public function addQuestionAction() 
	{
        //set layout to no nav layout
        $this->view->setLayout('nonavlayout');
        $levelList = Level::find();
        $this->view->levelList = $levelList;
        $this->view->levels = Level::find();

	}

    /*
    * Question Admin
    * save question
    */	
	public function saveQuestionAction()
	{

        $parameters = $this->request->getPost();
        $save = new Question();
        $save->question = $parameters['question'];
        $save->note = $parameters['note'];
        $save->explanation = $parameters['explanation'];
        $save->reference = $parameters['reference'];
        $save->multiple_choice = empty($parameters['multiple_choice']) ? 0 : $parameters['multiple_choice'];
        if( $save->save() )
        {
            foreach( $parameters['levels'] as $key => $val ) {
                $save_level = new LevelQuestion();
                $save_level->level_id = $val;
                $save_level->question_id = $save->id;
                $save_level->save();
            }
            $this->flashSession->success("Your data has been saved");
        } else {
            $this->flashSession->error("Your data cannot be saved");
        }
        return $this->response->redirect( $this->router->getControllerName() . "/add-question");
	}

    /*
    * Question Admin
    * delete question
    */
	public function deleteQuestionAction($id)
	{
        $row = Question::findFirstByid($id);
        if (!$row) {
            $this->flashSession->error("row was not found");
            return $this->response->redirect( $this->router->getControllerName() . "/list-question");
        }

        if (!$row->delete()) {
            foreach ($row->getMessages() as $message) {
                $this->flashSession->error($message);
            }
            return $this->response->redirect( $this->router->getControllerName() . "/list-question");
        }



        $this->flashSession->success("row was deleted successfully");
        return $this->response->redirect( $this->router->getControllerName() . "/list-question");
	}

    public function addAnswerAction($id)// adding answers to a question by question id
    {
        //set layout to no nav layout
        $this->view->setLayout('nonavlayout');
        $this->view->question = Question::findFirstByid($id);

    }

    public function saveAnswerAction()
    {
        $parameters = $this->request->getPost();
        $save = new Answer();
        $save->question_id = $parameters['question_id'];
        $save->answer = $parameters['answer'];
        $save->note = $parameters['note'];
        $save->condition = $parameters['condition'];
        if( !$save->save() ){
            $this->flashSession->error("Your data cannot be saved");
            return $this->response->redirect( $this->router->getControllerName() . "/add-answer/" . $parameters['question_id']);
        }   
        $this->flashSession->success("Your data has been saved");
        return $this->response->redirect( $this->router->getControllerName() . "/add-answer/" . $parameters['question_id']);
    }

    public function deleteAnswerAction($id)
    {
        $row = Answer::findFirstByid($id);
        if (!$row) {
            $this->flashSession->error("row was not found");
            return $this->response->redirect( $this->router->getControllerName() . "/add-answer/" . $row->question_id);
        }

        if (!$row->delete()) {

            foreach ($row->getMessages() as $message) {
                $this->flashSession->error($message);
            }
            return $this->response->redirect( $this->router->getControllerName() . "/add-answer/" . $row->question_id);

        }

        $this->flashSession->success("row was deleted successfully");
        return $this->response->redirect( $this->router->getControllerName() . "/add-answer/" . $row->question_id);
    }

    public function ajaxEditableAnswerAction()
    {
        //disable view in Ajax processing
        $this->view->disable();

        //getting request values
        $value = $this->request->get("value");
        $id = $this->request->getPost("id");
        $columnName = $this->request->getPost("columnName");

        //getting row will be edited
        $Components = Answer::findFirstByid($id);
        if (!$Components) {
            $data = "Cannot found this ID: " . $id;
        } else {
            $Components->$columnName = $value;
            if( $Components->save() == false ){
                $data = "Cannot save to database";
            }
            $data = $value;
        }
        echo $data;
    }

    public function addBelongToLevelAction($id)// adding question to multi-level by question id
    {
        //set layout to no nav layout
        $this->view->setLayout('nonavlayout');
        $question = Question::findFirstByid($id);
        $this->view->question = $question;

        $tmp = array();
        foreach($question->LevelQuestion->toArray() as $key => $val)
        {
            $tmp[$val['level_id']] = $val;
        }
        $this->view->levelQuestion = $tmp;
        $this->view->levels = Level::find();
    }

    public function saveBelongToLevelAction()// adding question to multi-level by question id
    {
        $parameters = $this->request->getPost();
        //$this->pr($parameters);exit;

        if( !is_array($parameters['levels']) )
        {
            $this->flashSession->error("Your data cannot be saved, system error!");
        } else {
            //cleanup rows related to this question before saving it.
            $conditions = "question_id = :question_id:";
            $param = array(
                "question_id" => $parameters['question_id']
            );

            $cleanup_first = LevelQuestion::find(array($conditions,"bind" => $param));
            if ($cleanup_first->delete() == false) {
                $this->flashSession->error("Your data cannot be saved");
                foreach ($cleanup_first->getMessages() as $message) {
                    $this->flashSession->error($message);
                }
                return $this->response->redirect( $this->router->getControllerName() . "/add-belong-to-level/" . $parameters['question_id']);
            }
            foreach( $parameters['levels'] as $key => $val ) {
                $save = new LevelQuestion();
                $save->level_id = $val;
                $save->question_id = $parameters['question_id'];
                $save->save();
            }
            return $this->response->redirect( $this->router->getControllerName() . "/add-belong-to-level/" . $parameters['question_id']);
        }

        $this->flashSession->success("Your data has been saved");
        return $this->response->redirect( $this->router->getControllerName() . "/add-belong-to-level/" . $parameters['question_id']);
    }

    public function ajaxEditableQuestionAction()
    {
        //disable view in Ajax processing
        $this->view->disable();

        //getting request values
        $value = $this->request->get("value");
        $id = $this->request->getPost("id");
        $columnName = $this->request->getPost("columnName");

        //getting row will be edited
        $Components = Question::findFirstByid($id);
        if (!$Components) {
            $data = "Cannot found this ID: " . $id;
        } else {
            $Components->$columnName = $value;
            if( $Components->save() == false ){
                $data = "Cannot save to database";
            }
            $data = $value;
        }
        echo $data;exit;
    }

    /*
    * Level Admin
    * list all levels
    */
    public function listLevelAction()
    {
        $list = Level::find(array("order" => "id DESC"));
        $this->view->list = $list;

        //list data for editable lib
        $category = Category::find();
        $select_string_value = "{";
        foreach ($category as $item) {
            $select_string_value .= "'{$item->id}' : '{$item->name}', ";
        }
        $select_string_value .= "}";
        $this->view->select_string_value = $select_string_value;

    }
	
    /*
    * Level Admin
    * add level
    */
    public function addLevelAction()
    {
        //set layout to no nav layout
        $this->view->setLayout('nonavlayout');

        $select = Category::find();
        $this->view->select = $select;
    }

    /*
    * Level Admin
    * save level
    */
    public function saveLevelAction()
    {
        $parameters = $this->request->getPost();
        $save = new Level();
        $save->name = $parameters['name'];
        $save->value = $parameters['value'];
        $save->category_id = empty($parameters['category_id']) ? 0 : $parameters['category_id'];
        if( $save->save() )
        {
            $this->flashSession->success("Your data has been saved");
        } else {
            $this->flashSession->error("Your data cannot be saved");
        }
        return $this->response->redirect( $this->router->getControllerName() . "/add-level");
    }

    public function ajaxEditableLevelAction()
    {
        //disable view in Ajax processing
        $this->view->disable();

        //getting request values
        $value = $this->request->get("value");
        $id = $this->request->getPost("id");
        $columnName = $this->request->getPost("columnName");
        
        //getting row will be edited
        $Components = Level::findFirstByid($id);
        if (!$Components) {
            $data = "Cannot found this ID: " . $id;
        } else {
            $Components->$columnName = $value;
            if( $Components->save() == false ){
                $data = "Cannot save to database";
            }
            $data = $value;
        }
        echo $data;
    }

    /*
    * Level Admin
    * delete level
    */
    public function deleteLevelAction($id)
    {
        $row = Level::findFirstByid($id);
        if (!$row) {
            $this->flashSession->error("row was not found");
            return $this->response->redirect( $this->router->getControllerName() . "/list-level");
        }

        if (!$row->delete()) {

            foreach ($row->getMessages() as $message) {
                $this->flashSession->error($message);
            }
            return $this->response->redirect( $this->router->getControllerName() . "/list-level");

        }

        $this->flashSession->success("row was deleted successfully");
        return $this->response->redirect( $this->router->getControllerName() . "/list-level");
    }

    public function listLevelQuestionAction($id)
    {
        //set layout to no nav layout
        $this->view->setLayout('nonavlayout');

        $this->view->level = Level::findFirstByid($id);

    }

    public function deleteLevelQuestionAction($id)
    {
        $tmp = explode("-", $id);
        $level_id = $tmp[0];
        $question_id = $tmp[1];

        $conditions = "level_id = :level_id: AND question_id = :question_id:";
        $param = array(
            "level_id" => $level_id,
            "question_id" => $question_id
        );

        $row = LevelQuestion::find(array($conditions,"bind" => $param));
        if (!$row) {
            $this->flashSession->error("row was not found");
            return $this->response->redirect( $this->router->getControllerName() . "/list-level-question/" . $level_id);
        }

        if (!$row->delete()) {

            foreach ($row->getMessages() as $message) {
                $this->flashSession->error($message);
            }
            return $this->response->redirect( $this->router->getControllerName() . "/list-level-question/" . $level_id);

        }

        $this->flashSession->success("row was deleted successfully");
        return $this->response->redirect( $this->router->getControllerName() . "/list-level-question/" . $level_id);

    }

    /*
    * Category Admin
    * list all Categories
    */
    public function listCategoryAction()
    {
        $list = Category::find();
        $this->view->list = $list;
    }
	
    /*
    * Level Admin
    * add Category
    */
    public function addCategoryAction()
    {
        //set layout to no nav layout
        $this->view->setLayout('nonavlayout');
    }

    /*
    * Level Admin
    * save Category
    */
    public function saveCategoryAction()
    {
        $parameters = $this->request->getPost();
        $save = new Category();
        $save->name = $parameters['name'];
        if( $save->save() )
        {
            $this->flashSession->success("Your data has been saved");
        } else {
            $this->flashSession->error("Your data cannot be saved");
        }
        return $this->response->redirect( $this->router->getControllerName() . "/add-category");
    }

    /*
    * Level Admin
    * delete Category
    */
    public function deleteCategoryAction($id)
    {
        $row = Category::findFirstByid($id);
        if (!$row) {
            $this->flashSession->error("row was not found");
            return $this->response->redirect( $this->router->getControllerName() . "/list-category");
        }

        if (!$row->delete()) {

            foreach ($row->getMessages() as $message) {
                $this->flashSession->error($message);
            }
            return $this->response->redirect( $this->router->getControllerName() . "/list-category");

        }

        $this->flashSession->success("row was deleted successfully");
        return $this->response->redirect( $this->router->getControllerName() . "/list-category");
    }

    public function ajaxEditableCategoryAction()
    {
        //disable view in Ajax processing
        $this->view->disable();

        //getting request values
        $value = $this->request->get("value");
        $id = $this->request->getPost("id");
        $columnName = $this->request->getPost("columnName");
        
        //getting row will be edited
        $Components = Category::findFirstByid($id);
        if (!$Components) {
            $data = "Cannot found this ID: " . $id;
        } else {
            $Components->$columnName = $value;
            if( $Components->save() == false ){
                $data = "Cannot save to database";
            }
            $data = $value;
        }
        echo $data;
    }


    public function viewImgQuestionAction($id)
    {
        //set layout to no nav layout
        $this->view->setLayout('nonavlayout');
        $save_id = $this->request->getPost("id");
        $img = $this->request->getPost("img");
        if( !empty($save_id) && !empty($img) ){
            $save = Question::findFirstByid($save_id);
            $save->img = $img;
            $save->save();
            $this->flashSession->success("Your data has been saved");
            return $this->response->redirect( $this->router->getControllerName() . "/view-img-question/" . $save_id);
        }

        $this->view->question = Question::findFirstByid($id);
    }

    public function viewVideoQuestionAction($id)
    {
        //set layout to no nav layout
        $this->view->setLayout('nonavlayout');
        $save_id = $this->request->getPost("id");
        $video = $this->request->getPost("video");
        if( !empty($save_id) && !empty($video) ){
            $save = Question::findFirstByid($save_id);
            $save->video = $video;
            $save->save();
            $this->flashSession->success("Your data has been saved");
            return $this->response->redirect( $this->router->getControllerName() . "/view-video-question/" . $save_id);
        }

        $this->view->question = Question::findFirstByid($id);
    }

}

