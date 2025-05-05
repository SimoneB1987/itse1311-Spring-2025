<?php

session_start();

$myName = "Simone Brown";

$_SESSION['myName'] = $myName;

echo "My name is " . $_SESSION['myName']; 