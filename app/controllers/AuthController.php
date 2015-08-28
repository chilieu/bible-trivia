<?php
use Phalcon\Mvc\Controller;

class AuthController extends Controller
{

	public function initialize() {
		$this->view->setLayout('index');
	}

    // wrapper function for debug purposes.
    public function pr($data = null) {
        echo '<pre>';print_r($data);echo '</pre>';      
    }

    public function indexAction()
    {

    }

    public function logoutAction()
    {
		$this->session->remove("administrator");
        $this->flashSession->success("Logged out!");
        return $this->response->redirect("");
    }

    public function authenticateAction()
    {

        $name = $this->request->getPost("name");
		$pass = $this->request->getPost("pass");
        if( $name == "binlieu" && $pass == "hoangyen" )
        {
            $administrator['name'] = "Administrator";
            $administrator['time'] = time();
            $this->session->set("administrator", $administrator);
            $this->flashSession->success("Hello Admin!");
            return $this->response->redirect("admin");
        } else {
            $this->flashSession->error("You don't have permission!");
            return $this->response->redirect("auth");
        }


    }

    
}
