<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->libraryDir,
        $config->application->pluginsDir
    )
)->register();


$loader->registerClasses(
    array(
        "PHPMailer"         => $config->application->libraryDir . "PHPMailer/class.phpmailer.php",
        "SMTP"         => $config->application->libraryDir . "PHPMailer/class.smtp.php",
        "POP3"         => $config->application->libraryDir . "PHPMailer/class.pop3.php",
        "CaptchaSecurityImages"         => $config->application->libraryDir . "CaptchaSecurityImages/CaptchaSecurityImages.php"
    )
)->register();