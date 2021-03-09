<!DOCTYPE html>
<html lang="en">
<head charset="UTF-8">
 <link rel="stylesheet" href="assets/css/styles.css">
 <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
</head>
<body>
<!--Header Begins-->
<header>
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
<main>
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
        //Echo the results
        echo " <hr>
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
</html>