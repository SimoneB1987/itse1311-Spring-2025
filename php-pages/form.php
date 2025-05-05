<?php

if (isset($_POST)   && $_POST ['submit'] != '') {

include('connection.php');

$conn->autocommit(FALSE);

echo $firstName;

$i = 0;

$query = "SELECT fname FROM myitsetable WHERE fname = 'Simone'ORDER BY fname DESC";

if($stmt=$conn->prepare($query)) {
    /*execute statment*/
    $stmt->execute();

////////////////////begin insert for contacts//////////////
//insert into database
$sql = "INSERT INTO contacts (
    firstName, 
    lastName, 
    age, 
    email, 
    phone    
    ) VALUES (
    '$firstName', 
    '$lastName',
    '$age', 
    '$email',
    '$phone' 
    
    )";
    
        if ($conn->query ($sql) === TRUE) {
            echo "New record entered";
        }
        else {
            "Error: " . $sql . $conn->error;
    }
////////////////////end insert for contacts//////////////

///////////////////begin insert for preferences//////////////////////
//insert into database
$sql = "INSERT INTO preferences (
    firstName, 
    lastName, 
    age, 
    email, 
    phone, 
    url, 
    startDate, 
    tShirt, 
    color,
    participation, 
    timeOfDay, 
    aboutYou, 
    terms,
    contacts_record_id
    ) VALUES (
    '$firstName', 
    '$lastName',
    '$age', 
    '$email', 
    '$phone', 
    '$url', 
    '$startDate', 
    '$tShirt', 
    '$color',
    '$participation', 
    '$timeOfDay', 
    '$aboutYou', 
    '$terms',
    '$last_id'
    )";
    
        if ($conn->query ($sql) === TRUE) {

            $last_id = $conn->insert_id;
            echo "New record entered";
        }
        else {
            "Error: " . $sql . $conn->error;
    }
    ////////////////////end insert for preferences//////////////

$conn->close();

} //came from post
else {
    echo "Please fill out the form";
}