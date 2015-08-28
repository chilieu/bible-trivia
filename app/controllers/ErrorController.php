<?php

class ErrorController extends ControllerBase
{
     public function show404Action()
    {
        $this->response->setHeader('HTTP/1.0 404','Not Found');
        //$this->view->pick('error/404');
    }
}