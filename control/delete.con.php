<?php
session_start();
use includes\Database;

include '../includes/DbConf.inc.php';
include '../includes/Database.inc.php';
$id=$_GET['id'];
$del = new Database();
$del->del($id);



?>