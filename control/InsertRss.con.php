<?php
session_start();
use includes\Database;

include '../includes/DbConf.inc.php';
include '../includes/Database.inc.php';

$mail = $_POST['email'];
$rss = $_POST['rss'];
$_SESSION['user'] = $_POST['email'];
$insert = new Database();
$insert->insert($mail,$rss);



?>