<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "login";
$port = "3306";


$conn = new mysqli($host, $user, $pass, $db_name, $port);

if (!$conn) {
    
    echo "connection faild!";
}