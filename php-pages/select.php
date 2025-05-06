<?php

include('connection.php');

//$firstName = $_POST['firstName'];

//echo $firstName;

$i = 0;

//$userPass = 'fc6317ca995c50d92793d0b4b94b6964728df1a54648aa2ba292a7a936dd9467'
$userPass = hash('sha256', 'itse1311');

$query = "SELECT firstName FROM contacts WHERE email = 'simbrown1988@gmail.com' ORDER BY firstName ASC";

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