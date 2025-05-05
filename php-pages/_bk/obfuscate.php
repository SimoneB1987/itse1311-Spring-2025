<?php

$myHiddenWords = base64_encode("ThisIsSomePassword");

$server = base64_encode ("localhost");
$username = base64_encode ("itse1311");
$password = base64_encode("itse1311");
$database = base64_encode ("itse1311");

echo "The Server is ". $server . "<br />";
echo "The Username is ". $username . "<br />";
echo "The Password is ". $password . "<br />";
echo "The Database is ". $database . "<br />";