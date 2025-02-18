<?php
session_start();
session_unset();
$_SESSION["status"]=false;
header("Location: login.php");



?>