<?php

session_start();

include('connection.php');


$i = 0;

$userPass = hash('sha256', $passwordFromForm);

$query = "SELECT firstName, email FROM contacts WHERE email = '$email' AND userPass = '$userPass' ORDER BY firstName ASC";

if($stmt=$conn->prepare($query)) {
    /*execute statment*/
    $stmt->execute();

    /*stmt bind variables*/ 
    $stmt->bind_result($firstName, $email);

        /*fetch values*/ 
        while($stmt->fetch()) {

            //$i++;
            //echo $i . ": " . $firstName . "<br />";
            echo "Welcome " . $_SESSION['validUser'];

        }

/*close statement*/ 
$stmt->close();

$_SESSION['validUser'] = $email;

}

//echo "The number of records are " . $i;

//echo "The session is " . $_SESSION['validUser'];

/*close connection*/ 
$conn->close();