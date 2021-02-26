<?php
include("connection.php");
if(!isSet($_POST)){
    echo "Error";
    header("Location: index.php");
    die();
} else {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phonenumber = $_POST["Phonenumber"];
    
    $sql_query = "INSERT INTO users (firstName,lastName,username,phoneNumber,password) VALUES ('$firstname','$lastname','$username','$phoneNumber','$password')";

    if(mysqli_query($db,$sql_query)){
    } else {
        echo "Error";
    }
    session_start();
    $_SESSION["username"] = $username;
    header("Location: index.php");
}
?>