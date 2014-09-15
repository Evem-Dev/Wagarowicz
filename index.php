<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include 'lib/bootstrap.php';

$app = new Bootstrap;
$app->import('db');
$app->initMVC();
$app->router();
$app->stats();
?>

