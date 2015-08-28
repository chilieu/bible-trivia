<?php

$router = new Phalcon\Mvc\Router();

//Define a bible route
$router->add(
    "/bible-([a-zA-Z0-9_\-]+)",
    array(
        "controller" => "bible",
        "action"     => "book",
        "bible"     => 1,
    )
);

$router->add('/([a-zA-Z\-]+)/([a-zA-Z\-]+)/:params', array(
    'controller' => 1,
    'action' => 2,
    'params' => 3
))->convert('action', function($action) {
    //return Phalcon\Text::lower(Phalcon\Text::camelize($action));
    return lcfirst(Phalcon\Text::camelize($action));
});

//$router->add( '/{controller}/{id:[a-zA-Z0-9]+}', array( "action" => "index", ) );
//return $router;