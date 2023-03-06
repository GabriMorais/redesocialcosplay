<?php

session_start();
require('vendor/autoload.php');
define('INCLUDE_PATH_STATIC','http://localhost/cosplay/api/RedeSocialCosplay/Views/pages/');
define('INCLUDE_PATH','http://localhost/cosplay/api/');
$app = new RedeSocialCosplay\Aplicacao();
$app->run();

?>
