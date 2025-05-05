<?php
/**/
ini_set('display_errors', '1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);


$server = "localhost";
$username = "itse1311";
$password = "itse1311";
$database = "itse1311";

$conn = new mysqli($server, $username, $password, $database);

//Connection Creation
if ($conn->connect_error) {
    //die("Connection failed".$conn->connect_error);
}
else {
    /*echo "Connection Successful";*/
}
