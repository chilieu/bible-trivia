<?php

class UserController extends UserBase
{

    public function indexAction()
    {
		$this->persistent->title = null;//reset quiz title persistent
        $this->view->levels = Level::find();
    }

    public function updateAction()
    {

    	$user = User::findFirstByEmail($this->logedin);

    	if($user) {

	        $password = $this->request->getPost('password', 'string');

			if ($this->security->checkHash($password, $user->password)) {

		        $password_new = $this->request->getPost('password_new', 'string');
		        $password_confirm = $this->request->getPost('password_confirm', 'string');

		        if($password_new != $password_confirm){
		            $this->flashSession->warning("Password does not match");
		            return $this->response->redirect("user#profile");
		        }

				$user->password = $password_new;
	            if ( !$user->save()) {
	                foreach ($user->getMessages() as $message)
	                {
	                    $this->flashSession->warning($message . "<br>");
	                }
	                return $this->response->redirect("user#!profile");
	            }

				$this->flashSession->success("Your new password has been changed.");
				return $this->response->redirect("user#profile");

	    	} else {
	            $this->flashSession->warning("Old password is incorrect.");
	            return $this->response->redirect("user#profile");
	    	}

    	} else {
            $this->flashSession->warning("Please sign in before making changes");
            return $this->response->redirect("signin");
    	}


    }

    public function createQuizAction()
    {
    	if( $this->request->get("title") !== null )
    	{
            $data['title'] = $this->request->get("title");
    		$data['levels'] = $this->request->get("levels");
    		$data['quiz'] = array();
    		$this->persistent->quiz = $data;
    		return $this->response->redirect("user/create-quiz");	
    	}

    	$this->view->quiz = $this->persistent->quiz;
    	$this->pr( $this->persistent->quiz );




    }

}