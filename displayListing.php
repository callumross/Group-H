<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HELP A SOUL</title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    </head>
<body>
<nav>
<img id="logo" src="assets/images/logo.JPG" alt="MAKE SOMEONE SMILE"/>
        <div id="quicklinks">
            <ul>
                <li><a href="home.php">Home</a></li>
<<<<<<< HEAD
                <li><a href="displayListing.php">Listings</a></li>
=======
                <li><a href="#">Listings</a></li>
                <li><a href="displayInterest.php">Interest</a></li>
>>>>>>> 2a6261bb35b73b2abf735192302df2bacc1afcde
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div> 
        <img id="banner" src="assets/images/banner.JPG" alt="BANNER"/>
</nav>
        <header>
            <h2>Search for service</h2>
            <form action="searchListings.php" method="POST">
                <input type="text" name="location" placeholder="Aberdeen"/>
                <input type="submit" value="Search">
            </form>
        </header>
        <main>
            <h2>Display of Listings</h3>

                <!--display list-->
                <?php
    // Connect to database
    include("connection.php");
    // Sql query
    $sql = "SELECT * FROM listings WHERE 1";
    //Get the result
    $result = $db->query($sql);
    //Fetch the associative array
    while($row = $result->fetch_array()){
        // Save variables from array
        $listingName = $row["listingName"];
        $listingLocation = $row["listingLocation"];
        $listingDescription = $row["listingDescription"];
        $goodOrService = $row["goodOrService"];
        $listingPostcode = $row["listingPostcode"];
        $listingID = $row["listingID"];
        //Echo the results
        echo " <hr>
                    <p> Listing ID = {$listingID}</p>
                    <p>Name ={$listingName}</p>
                    <p>Good or Service ={$goodOrService}</p>
                    <p>Description ={$listingDescription}</p>
                    <p>Location ={$listingLocation}</p>
                    <p>Postcode ={$listingPostcode}</p><br>
                    <p><a href='interest.html'>Interested?</a></p>
                    <hr>";                    
    }
    ?>
        </main>
        <!--START OF FOOTER-->
        <footer>
            <p>(C) 2021 Group H CMM 004 RGU</p>
        </footer>
        <!--END OF FOOTER-->
        
</body>
</html>