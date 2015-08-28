<?php

class QuizController extends ControllerBase
{

	public function initialize() {
		parent::initialize();
		$this->view->setLayout('quiz');
	}

    public function indexAction()
    {
    	$this->view->category = Category::find();
    }

	public function levelAction($level_value) 
	{
		if ( !$level_value ) {//if no level selected
			return $this->response->redirect("quiz");
		}

        $conditions = "value = :level_value:";
        $param = array(
            "level_value" => $level_value
        );

        $level = Level::findFirst(array($conditions,"bind" => $param));
        $this->view->level = $level;

        $conditions = "level_id = :level_id:";
        $param = array(
            "level_id" => $level->id
        );
        
        $question = LevelQuestion::find(array($conditions,"bind" => $param, "order" => "RAND()", "limit" => 10));
        $this->view->question = $question;

	}
	
	public function submitAction()
	{
		$count_correct = 0;
		$count_wrong = 0;
		$correct_answer_array = array();
		$parameters = $this->request->getPost();

		//if no question answered
		if(!isset($parameters['answer'])){
			return $this->response->redirect("quiz");
		}

		//get answer from db
		foreach ($parameters['answer'] as $key => $value) {
			$question = Question::findFirstByid( $key );
			
			foreach($question->Answer as $item){
				if($item->condition == 1 && $parameters['answer'][$key][$item->id] == 2){
					$parameters['answer'][$key][$item->id] = 1;//your correct answer
					$count_correct++;
				} elseif($item->condition == 1) {
					$parameters['answer'][$key][$item->id] = 3;//correct with no answer
				} elseif($parameters['answer'][$key][$item->id] == 2) {//wrong answer
					$count_wrong++;
				}
			}

		}

		$parameters['correct'] = $count_correct;
		$parameters['wrong'] = $count_wrong;
		$this->persistent->parameters = $parameters;
		return $this->response->redirect("quiz/result");
	}

	public function resultAction() 
	{

		$question = array();
        if( isset($this->persistent->parameters) ){
			$parameters = $this->persistent->parameters;
        	$this->view->level = Level::findFirstByid( $parameters['level_id'] );
        	foreach ($parameters['answer'] as $key => $value) {
				$question[] = Question::findFirstByid( $key );
			}
			$this->view->question = $question;

        	$this->view->corret_answer = $this->persistent->parameters['answer'];
        	$this->view->count_correct = $this->persistent->parameters['correct'];
        	$this->view->count_wrong = $this->persistent->parameters['wrong'];
        } else {
     		return $this->response->redirect("quiz");   	
        }

	}

}