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
                <li><a href="homepage.php">Home</a></li>
                <li><a href="#">Donate&Receive</a></li>
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
            <h2>Details of your Donation</h3>

                <!--Sign up form-->
                <form action="addListing.php" method="POST">
                    <div>
                        <label for="listingName">Name of Item to Donate</label><br>
                        <input type="text" name="listingName" id="listingName" required="Required">
                        <br>
                        <label for="listingLocation">Location of Item</label><br>
                        <input type="text" name="listingLocation" id="listingLocation" required="Required">
                        <br>
                        <label for="listingDescription">Brief Description of the item</label><br>
                        <input type="text" name="listingDescription" id="listingDescription" required="Required">
                        <br>
                        <p>Good or Service</p>
                        <label for="good">Good</label>
                        <input type="radio" name="goodOrService" id="good" value="good">
                        <label for="service">Service</label>
                        <input type="radio" name="goodOrService" id="service" value="service">
                        <br>
                        <label for="postCode">Post code</label><br>
                        <input type="text" name="postCode" id="postCode" required="Required">
                        <br>
                        <input type="submit" value="Submit">
                    </div>
                </form>
        </main>
        <!--START OF FOOTER-->
        <footer>
            <p>(C) 2021 Group H CMM 004 RGU</p>
        </footer>
        <!--END OF FOOTER-->
</body>
</html>