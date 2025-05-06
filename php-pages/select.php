<?php

include('connection.php');

//$firstName = $_POST['firstName'];

//echo $firstName;

$i = 0;


$query = "SELECT firstName FROM contacts WHERE firstName = 'Simone' ORDER BY firstName ASC";

if($stmt=$conn->prepare($query)) {
    /*execute statment*/
    $stmt->execute();

    /*stmt bind variables*/ 
    $stmt->bind_result($firstName);

        /*fetch values*/ 
        while($stmt->fetch()) {

            $i++;
            echo $i . ": " . $firstName . "<br />";

        }

/*close statement*/ 
$stmt->close();

}

echo "The number of records are " . $i;

/*close connection*/ 
$conn->close();