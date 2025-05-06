<?php

$password [] = "password";
$password [] = "12345";
$password [] = "000000";
$password [] = "itse1311";

$myPassword = "itse1311";

$myPassword = hash('sha256', $myPassword);


if (is_array($password)) {

    foreach($password as $passwords) {

        $myHashedPassword = hash('sha256', $passwords);

        if($myHashedPassword == $myPassword) {
            echo "Got hacked using " . $passwords . " encrypted as " . $myHashedPassword;   
    }
    else {
        echo "No luck using " . $passwords . "<br/>";
    }
}
}

//is array



//echo $myPassword;
