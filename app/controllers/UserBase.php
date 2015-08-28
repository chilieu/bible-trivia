<?php

class UserBase extends ControllerBase
{

	public function initialize() {
		parent::initialize();

		if ( !$this->logedin ) {
			return $this->dispatcher->forward(array(
                        'controller' => 'signin'
                    ));
		}

		$this->view->rememberMe = $this->logedin;
	}
 

    
}
