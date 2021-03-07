<?php
session_start();
$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <img id="logo" src="assets/images/logo.JPG" alt="MAKE SOMEONE SMILE"/>
        <div id="quicklinks">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Donate&Receive</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="loginPage.php">Login page</a></li>
                <li><a href="signup.html">Sign up page</a></li>
            </ul>
        </div> 
        <img id="banner" src="assets/images/banner.JPG" alt="BANNER"/>
        <title>HELP A SOUL</title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    </head>
<body>
        <header>
            <h2>Serach for service</h2>
            <form>
                <input type="text" name="Keywordbox" value="Enter Key words"/>
                <input type="submit" value="Search">
            </form>
        </header>
        <main>
            <h2>Details of your Danation</h3>

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
                        <input type="radio" name="goodOrService" id="good">
                        <label for="service">Service</label>
                        <input type="radio" name="goodOrService" id="service">
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