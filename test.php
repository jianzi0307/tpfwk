<?php

require('./Raven/Autoloader.php');

define('EXCEPTION_DSN','http://c17c60572a254d34a389f8ace4742baf:fba457a4c79b45108db25474b21e84cf@127.0.0.1:9900/3');
Raven_Autoloader::register();
$sentry_exception_client = new Raven_Client(EXCEPTION_DSN,array('tags'=>array(
    'php_version'=>phpversion(),)));
$sentry_exception_handler = new Raven_ErrorHandler($sentry_exception_client);
$sentry_exception_handler->registerExceptionHandler();
$sentry_exception_handler->registerErrorHandler();
$sentry_exception_handler->registerShutdownFunction();

echo "bbb";
echo b;
echo 'aaa';

try {
    throw new Exception('Uh oh!');
}
catch (Exception $e) {
    echo PHP_EOL.$e;
    $sentry_exception_client->captureException($e);
}
