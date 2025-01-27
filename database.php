<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "sms";

$db = mysqli_connect($server_name,$user_name, $password,$database);

if (!$db) {
    die ("Database Connection Failed".mysqli_connect_error());
} else {
    

}







?>