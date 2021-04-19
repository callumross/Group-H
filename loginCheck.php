<?php
// Connect to database
include("connection.php");
//If theres no post array then the form hasn't been submitted
if(!IsSet($_POST))
{
    // End session and redirect to loginPage
    header("Location: loginPage.php");
    exit();
}

// If eithe username or password is not set then the form hasnt been submitted properly
if(!IsSet($_POST["username"]) || !IsSet($_POST["password"])){
    //End session and redirect to loginPage
    header("Location: loginPage.php");
    exit();
}

// Set username and password variables to that from html form
$username = $_POST["username"];
$password = $_POST["password"];

// SQL Query
$sql = "SELECT userID FROM users WHERE username = '$username' AND password = '$password'";

// Get the result from the query
$result = mysqli_query($db,$sql);

// Check we only have one row back from query on table
if(mysqli_num_rows($result) == 1){
    // Start session and save username to session array
    session_start();
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit();
} else {
    // If theres no row or more than one row echo error message
    echo "Wrong username or password";
}
?> 