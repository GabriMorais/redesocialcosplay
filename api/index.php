<?php

session_start();
require('vendor/autoload.php');
define('INCLUDE_PATH_STATIC','https://redesocialcosplay.000webhostapp.com/RedeSocialCosplay/Views/pages/');
define('INCLUDE_PATH','https://redesocialcosplay.000webhostapp.com/');
$app = new RedeSocialCosplay\Aplicacao();
$app->run();

?>
