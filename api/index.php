<?php

session_start();
require('vendor/autoload.php');
define('INCLUDE_PATH_STATIC','https://redesocialcosplay.vercel.app/api/RedeSocialCosplay/Views/pages/');
define('INCLUDE_PATH','https://redesocialcosplay.vercel.app/api/');
$app = new RedeSocialCosplay\Aplicacao();
$app->run();

?>
