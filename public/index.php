<?php
error_reporting( E_ALL & ~E_NOTICE );
ini_set( "display_errors", 1 );

try {

    /**
     * Read the configuration
     */
    $config = include __DIR__ . "/../app/config/config.php";

    /**
     * Read auto-loader
     */
    include __DIR__ . "/../app/config/loader.php";

    /**
     * Read services
     */
    include __DIR__ . "/../app/config/services.php";

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    $di->set('flashSession', function(){
        $flash = new \Phalcon\Flash\Session(array(
            'error'       => 'alert alert-danger',
            'success'   => 'alert alert-success',
            'notice'    => 'alert alert-info',
            'warning'   => 'alert alert-warning'
        ));    
        return $flash;
    });

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage();
}
