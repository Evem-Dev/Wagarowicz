<?php
session_start();
include 'lib/bootstrap.php';

$app = new Bootstrap;
$app->import('db');
$app->initMVC();
$app->router();

?>

