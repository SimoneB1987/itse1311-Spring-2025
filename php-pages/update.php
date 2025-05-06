<?php

session_start();

include('connection.php');

$sql = "UPDATE contacts SET age = '60' WHERE record_id = 1";

if ($conn->query($sql)===TRUE) {
    echo "Records Updated";
}
else {
    echo "Error updating records";
}

$conn->close();