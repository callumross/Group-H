<?php
// Resume session if already logged in
    session_start();
    if(IsSet($_SESSION["username"]))
    {
        // If username is set redirect to homepage
        header("Location: index.php");
        exit();
    }

?>
<!DOCTYPE html>
<html>
<head>
        <img id="banner" src="assets/images/banner.JPG" alt="BANNER"/>
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
</head>
<body>
<nav>
<img id="logo" src="assets/images/logo.JPG" alt="MAKE SOMEONE SMILE"/>
        <div id="quicklinks">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="DonateandReceive.php">Donate&Receive</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="loginPage.php">Login page</a></li>
                <li><a href="signup.html">Sign up page</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div> 
</nav>  
    <header><h1 style="color:black;">Welcome to the SwapApp</h1>
        <h2>Search for service</h2>
            <form action="searchListings.php" method="POST">
                <input type="text" name="location" placeholder="Aberdeen"/>
                <input type="submit" value="Search">
            </form>     
</header>

    <form action="loginCheck.php" method="POST" id="login">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" require="Required"> 
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" require="Required">
        </div>
        <div>
            <button type="submit">Log in</button>
        </div>
    </form>
</body>

</html>