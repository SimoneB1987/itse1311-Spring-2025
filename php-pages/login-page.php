<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $passwordFromForm = $_POST['password'];

    require_once('select-username.php');

    require_once("login-form.php");

    //require_once('update.php');
} 
