<?php
// Connect to the database
include("connection.php");

//Check if a post request has been sent
if(!isset($_POST)){
    echo "Error";
    header("Location: Index.html");
    die();
} else {
    // Save all the POST values into variables
    $listingName = $_POST["listingName"];
    $listingLocation = $_POST["listingLocation"];
    $listingDescription = $_POST["listingDescription"];
    $goodOrService = $_POST["goodOrService"];
    $listingPostcode = $_POST["postCode"];

    // Run the sql query
    $sql_query = "INSERT INTO listings (listingName,listingLocation,listingDescription,goodOrService,listingPostcode) VALUES ('$listingName','$listingLocation','$listingDescription','$goodOrService','$listingPostcode')";

    // Error check
    if(mysqli_query($db,$sql_query)){
        // Do nothing
    } else {
        echo "Error";
    }

    // Save username in session variable and redirect
    header("Location: Index.html");
}
?>