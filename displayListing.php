<!-- <!DOCTYPE html>
<html lang="en">
<head charset="UTF-8">
 <link rel="stylesheet" href="assets/css/styles.css">
 <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
</head>
<body>
<!--Header Begins-->
<!-- <header>
</header>
<nav>
<img id="logo" src="assets/images/logo.JPG" alt="MAKE SOMEONE SMILE"/>
        <div id="quicklinks">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Donate&Receive</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="loginPage.php">Login page</a></li>
                <li><a href="signup.html">Sign up page</a></li>
                <li><a href="logout.php">Log out</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div> 
        <img id="banner" src="assets/images/banner.JPG" alt="BANNER"/>
</nav>
<!--Main Begins-->
<!-- <main>
<h3>Listings</h3>
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
                    <p><a href='try.html'>Interested?</a></p>
                    <hr>";                    
    }
    ?>
</main>
</body>
</html> --> --> -->



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
                <li><a href="index.php">Home</a></li>
                <li><a href="#">listings</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="loginPage.php">Login page</a></li>
                <li><a href="signup.html">Sign up page</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div> 
        <img id="banner" src="assets/images/banner.JPG" alt="BANNER"/>
</nav>
        <header>
            <h2>Search for service</h2>
            <form>
                <input type="text" name="Keywordbox" value="Enter Key words"/>
                <input type="submit" value="Search">
            </form>
        </header>
        <main>
            <h2>Display of Listings</h3>

                <!--display list-->
                <form action="addListing.php" method="POST">
                    <div>
                        <label for="listingIdentification">Listing ID</label><br>
                        <input type="number" name="listingIdentification" id="listingIdentification" required="Required">
                        <br><label for="listingName">Name of Listing</label><br>
                        <input type="text" name="listingName" id="listingName" required="Required">
                        <br>
                        <label for="userIdentification">User ID</label><br>
                        <input type="number" name="userIdentification" id="userIdentification" required="Required">
                        <br>
                        <label for="listingLocation">Location of Item</label><br>
                        <input type="text" name="listingLocation" id="listingLocation" required="Required">
                        <br>
                        <label for="listingDescription">Description of item</label><br>
                        <input type="text" name="listingDescription" id="listingDescription" required="Required">
                        <br>
                        <p>Good or Service</p>
                        <label for="good">Good</label>
                        <input type="radio" name="goodOrService" id="good" value="good">
                        <label for="service">Service</label>
                        <input type="radio" name="goodOrService" id="service" value="service">
                        <br>
                        <label for="postCode">Listing Post code</label><br>
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