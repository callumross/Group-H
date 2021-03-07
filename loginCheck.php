<?php
include("connection.php");
// Start the session
session_start();
//If theres no post array then the form hasn't been submitted
if(!IsSet($_POST))
{
    // End session and redirect to loginPage
    session_destroy();
    header("Location: loginPage.php");
    exit();
}

// If eithe username or password is not set then the form hasnt been submitted properly
if(!IsSet($_POST["username"]) || !IsSet($_POST["password"])){
    //End session and redirect to loginPage
    session_destroy();
    header("Location: loginPage.php");
    
}

// Set username and password variables to that from html form
$username = $_POST["username"];
$password = $_POST["password"];

// SQL Query
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// Result from query
$result = mysqli_query($db,$sql);

// Check we only have one row back from query on table
if(mysqli_num_rows($result) ==1){
    session_start();
    $_SESSION['username'] = $username;
    header("Location: try.html");
}

// If theres no rows or more than 1 we direct back to index page
session_destroy();
header("Location: Index.html");
?> 