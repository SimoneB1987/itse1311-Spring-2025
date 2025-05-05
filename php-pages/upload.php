<?php

$file_name = $_FILES['file']['name'];
echo "the file is" . $file_name;

if (isset($_FILES['file'])) {

//include_once('guid.php');

    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    $temp = explode('.', $_FILES['file']['name']);
    $file_ext = strtolower(end($temp));
    $extensions = array("pdf", "docx");
    if(in_array($file_ext, $extensions)===false) {
        $errors[] = "Extension not allowed, please choose a PDF or Word document";
    }

    if($file_size > 2097152) {
        $errors[] = "File size must be less than 50MB";
    }

    if (empty($errors)===TRUE) {
        move_uploaded_file($file_tmp, "uploads/" . $form_id . $file_name);
    }
    else {
        print_r($errors);
    }


  
} // is isset
else {
    echo "No file uploaded";
}