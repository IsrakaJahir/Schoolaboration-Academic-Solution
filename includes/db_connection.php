<?php

$servername = "localhost";
$username = "root";
$db = "schoolaboration";
$password = "";

$conn =   mysqli_connect($servername, $username, $password, $db);

if(!$conn){
    die("Error in connecting. ".$conn->connect_error);
}

?>
