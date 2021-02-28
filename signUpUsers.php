<?php
// Include file to connect to database
include("connection.php");
// If a post request has not been submitted then redirect
if(!isSet($_POST)){
    echo "Error";
    header("Location: Index.html");
    die();
} else {
    // Save all the POST values into variables
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $postCode = $_POST["postCode"];
    $contactNumber = $_POST["contactNumber"];
    
    // Run sql query to add information to database
    $sql_query = "INSERT INTO users (firstName,lastName,username,password,postCode,contactNumber) VALUES ('$firstName','$lastName','$username','$password','$postCode','$contactNumber')";

    // If the query is succesfull nothing happens, else echo an error message
    if(mysqli_query($db,$sql_query)){
    } else {
        echo "Error";
    }
    // Save the username in a session variable so the system knows the user is logged in
    session_start();
    $_SESSION["username"] = $username;
    header("Location: Index.html");
}
?>