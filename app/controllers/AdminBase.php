<?php
use Phalcon\Mvc\Controller;

class AdminBase extends Controller
{

	public function initialize() {
		$this->view->setLayout('admin');
		$logedin = $this->session->get("administrator");
		if( empty($logedin) )
		{
            $this->flashSession->error("You don't have permission!");
            return $this->response->redirect("auth");
		}
		$this->view->logedin = $logedin;
	}


    // wrapper function for debug purposes.
    public function pr($data = null) {
        echo '<pre>';print_r($data);echo '</pre>';      
    }

}
