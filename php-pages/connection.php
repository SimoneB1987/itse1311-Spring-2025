<?php
/**/
ini_set('display_errors', '1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);


$server = "bG9jYWxob3N0";
$username = "aXRzZTEzMTE=";
$password = "aXRzZTEzMTE=";
$database = "aXRzZTEzMTE=";

$conn = new mysqli(base64_decode($server), base64_decode($username), base64_decode($password), base64_decode($database));

//Connection Creation
if ($conn->connect_error) {
    //die("Connection failed".$conn->connect_error);
}
else {
    //echo "Connection Successful";
}
