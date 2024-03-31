<?php
session_start();

// check for a post request
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];

    // check post name and email are set and not empty
    if(( isset($name) && !empty($name) ) && ( isset($email) && !empty($email) )) {
        // get the data
        $user = [
            "name" => $name,
            "email" => $email
        ];

        $_SESSION["users"][] = $user;
        header("Location: index.php");
        exit;

    } else {
        $_SESSION["errors"][] = "All fields are required.";
        header("Location: index.php");
        exit;
    }
}

