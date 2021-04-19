<?php
// Include file to connect to database
include("connection.php");
// If a post request has not been submitted then redirect
if(!isSet($_POST)){
    echo "Error";
    header("Location: interest.html");
    die();
} else {
    // Save all the POST values into variables
    $listingID = $_POST["listingID"];
    $listingName = $_POST["listingName"];
    $username = $_POST["username"];
    $goodOrService = $_POST["goodOrService"];
    $listingLocation = $_POST["listingLocation"];
    $listingpostCode = $_POST["listingpostCode"];
    $userID = $_POST["userID"];
    
    // Run sql query to add information to database
    $sql_query = "INSERT INTO interest (listingID,listingName,username,goodOrService,listingLocation,listingpostCode,userID) VALUES ('$listingID','$listingName','$username','$goodOrService','$listingLocation','$listingPostCode','$userID')";

    // If the query is succesfull nothing happens, else echo an error message
    if(mysqli_query($db,$sql_query)){
    } else {
        echo "Error";
    }
    // Save the username in a session variable so the system knows the user is logged in
    session_start();
    $_SESSION["username"] = $username;
    header("Location: displayListing.php");
}
?>