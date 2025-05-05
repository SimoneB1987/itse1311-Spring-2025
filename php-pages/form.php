<?php

if (isset($_POST) && $_POST['submit'] != '') {

    include('connection.php');
    
    include('upload.php');

    $conn->autocommit(FALSE);

    // ✅ Get all the form inputs safely

    $firstName     = $_POST['firstName']     ?? '';
    $lastName      = $_POST['lastName']      ?? '';
    $age           = $_POST['age']           ?? '';
    $email         = $_POST['email']         ?? '';
    $phone         = $_POST['phone']         ?? '';
    $url           = $_POST['url']           ?? '';
    $startDate     = $_POST['startDate']     ?? '';
    $tShirt        = $_POST['tShirt']        ?? '';
    $color         = $_POST['color']         ?? '';
    $participation = $_POST['participation'] ?? '';
    $timeOfDay     = $_POST['timeOfDay']     ?? '';
    $aboutYou      = $_POST['aboutYou']      ?? '';
    $terms         = $_POST['terms']         ?? '';

    try {
        $conn->autocommit(FALSE); // Begin transaction

        echo strtoupper($form_id); // For testing

        // Optional SELECT to test the connection or logic
        $query = "SELECT fname FROM myitsetable WHERE fname = 'Simone' ORDER BY fname DESC";
        if ($stmt = $conn->prepare($query)) {
            $stmt->execute();
            $stmt->close(); // ✅ Always close the result set
        }

        // Insert into contacts table
        $sql1 = "INSERT INTO contacts (
            firstName, lastName, age, email, phone, guid
        ) VALUES (
            '$firstName', '$lastName', '$age', '$email', '$phone', '$form_id'
        )";

        if ($conn->query($sql1) === TRUE) {
            echo "New contact record entered<br>";
            $last_id = $conn->insert_id; // Capture the new contact's ID
        } else {
            throw new Exception("Error inserting into contacts: " . $conn->error);
        }

        // Insert into preferences table
        $sql2 = "INSERT INTO preferences (
            firstName, lastName, age, email, phone, url, startDate, tShirt, color,
            participation, timeOfDay, aboutYou, terms, contacts_record_id, guid
        ) VALUES (
            '$firstName', '$lastName', '$age', '$email', '$phone', '$url', '$startDate',
            '$tShirt', '$color', '$participation', '$timeOfDay', '$aboutYou', '$terms',
            '$last_id', '$form_id'
        )";

        if ($conn->query($sql2) === TRUE) {
            echo "New preferences record entered<br>";
        } else {
            throw new Exception("Error inserting into preferences: " . $conn->error);
        }

        $conn->commit(); // ✅ Commit if everything worked

        include('upload.php'); // Upload the file

    } catch (Exception $e) {
        $conn->rollback(); // ❌ Roll back if there’s an error
        echo "Transaction failed: " . $e->getMessage();
    }
}
?>
