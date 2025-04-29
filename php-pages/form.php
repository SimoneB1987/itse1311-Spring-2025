<?php

include('connection.php');

$firstName = $_POST['firstName'];

echo $firstName;

$i = 0;

$query = "SELECT fname FROM myitsetable WHERE fname = 'Simone'ORDER BY fname DESC";

if($stmt=$conn->prepare($query)) {
    /*execute statment*/
    $stmt->execute();

    /*stmt bind variables*/ 
    $stmt->bind_result($fname);

        /*fetch values*/ 
        while($stmt->fetch()) {

            $i++;
            echo $i . ": " . $fname . "<br />";

        }

/*close statement*/ 
$stmt->close();

}

echo "The number of records are " . $i;

/*close connection*/ 
$conn->close();