<?php
$start_time = microtime(true);
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include 'lib/bootstrap.php';

$app = new Bootstrap;
$app->import('db');
$app->import('timetable.class');
$app->import('subjects.class');

$app->initMVC();
$app->router();
$app->stats();
$time = microtime(true) - $start_time;
echo "Execution time: ".$time;
?>

