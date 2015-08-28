<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

	var $logedin;

	public function initialize() {
		$this->view->setLayout('index');

        //Check if the cookie has previously set

        if ( !empty($_COOKIE["bible-trivia-user"]) ) {

            //Get the cookie

            $this->logedin = $_COOKIE["bible-trivia-user"];

        } elseif( !empty($this->session->get("bible-trivia-user")) ) {

            $this->logedin = $this->session->get("bible-trivia-user");

        } else {

            $this->logedin = NULL;

        }

		$this->view->rememberMe = $this->logedin;

	}


    // wrapper function for debug purposes.

    public function pr($data = null) {

        echo '<pre>';print_r($data);echo '</pre>';      
        
    }
    
}
