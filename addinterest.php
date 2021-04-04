<?php
session_start();
// Connect to the database
include("connection.php");

//Check if a post request has been sent
if(!isset($_POST)){
    echo "Error";
    header("Location: index.php");
    die();
} else {
    //Get user id to add to the interest table
    $username = $_SESSION["username"];
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $db->query($sql);
    $row = $result->fetch_array();
    $userID = $row["userID"];

    // Save all the POST values into variables
    $listingID = $_POST["listingID"];
    $listingName = $_POST["listingName"];
    $username = $_POST["username"];
    $goodOrService = $_POST["goodOrService"];
    $listingLocation = $_POST["location"];
    $listingPostcode = $_POST["postCode"];

    
    // Run the sql query
    $sql_query = "INSERT INTO interest (listingID,listingName,username,goodOrService,listingLocation,listingPostcode,userID) VALUES ('$listingID','$listingName','$username','$goodOrService', '$listingLocation','$listingPostcode','$userID')";

    // Error check
    if(mysqli_query($db,$sql_query)){
        // If succesful, redirect to index page
        header("Location: index.php");
        exit();
    } else {
        // If no succesful display error
        echo "Error";
    }

}
?>