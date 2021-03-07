<?php
// Resume session if already logged in
    session_start();
    if(IsSet($_SESSION["username"]))
    {
        // If username is set redirect to homepage
        header("Location: Index.php");
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
<img id="logo" src="assets/images/logo.JPG" alt="MAKE SOMEONE SMILE"/>
        <div id="quicklinks">
            <ul>
                <li><a href="Index.html">Home</a></li>
                <li><a href="DonateandReceive.html">Donate&Receive</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="loginPage.php">Login page</a></li>
                <li><a href="signup.html">Sign up page</a></li>
            </ul>
        </div> 
        
    <header><h1 style="color:black;">Welcome to the SwapApp</h1></header>

    <h2>The following username and password combinations work</h2>
    <ul>
        <li>Username = Baz, Password = letmein</li>
        <li>Username = Dave, Password = thekey</li>
        <li>Username = Keith, Password = password</li>
    </ul>

    <form action="loginCheck.php" method="POST" id="login">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username"> 
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit">Log in</button>
        </div>
    </form>
</body>
</html>