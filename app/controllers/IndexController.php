<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        //set layout to no nav layout
        /*
        $this->view->setLayout('nonavlayout');
        */
        return $this->dispatcher->forward(array(
            "controller" => "quiz",
            "action" => "index"
        ));
    }
	

}

