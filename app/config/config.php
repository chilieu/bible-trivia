<?php

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => 'bible',
        'prefix'      => 'bible_',
        'charset'     => 'utf8',
    ),

    'database2' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => 'bible_book',
        'prefix'      => '',
        'charset'     => 'utf8',
    ),

    'application' => array(
        'configDir' => __DIR__ . '/../../app/config/',
        'controllersDir' => __DIR__ . '/../../app/controllers/',
        'modelsDir'      => __DIR__ . '/../../app/models/',
        'viewsDir'       => __DIR__ . '/../../app/views/',
        'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        'libraryDir'     => __DIR__ . '/../../app/library/',
        'cacheDir'       => __DIR__ . '/../../app/cache/',
        'baseUri'        => '/',
    ),
    'mail' => array(
        'fromName' => 'Bible Team',
        'fromEmail' => '',
        'smtp' => array (
                'server' => 'smtp.gmail.com',
                'port' => 465,
                'security' => 'ssl',
                'username' => '',
                'password' => ''//reminder: password app active from google account
            )
    )
));
