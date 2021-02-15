<?php
// Resume session if already logged in
    session_start();
    if(IsSet($_SESSION["username"]))
    {
        // If username is set redirect to homepage
        header("Location: homePage.php");
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
                <li><a href="#">Home</a></li>
                <li><a href="#">Donate&Receive</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Suggestions</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="loginPage.php">Login page</a></li>
                <li><a href="signup.html">Sign up page</a></li>
            </ul>
        </div> 
        
    <header><h1>Welcome to the SwapApp</h1></header>

    <h2>The following username and password combinations work</h2>
    <ul>
        <li>Username = Baz, Password = letmein</li>
        <li>Username = Dave, Password = thekey</li>
        <li>Username = Keith, Password = password</li>
    </ul>

    <p><a href="Index.html">Back to home page</a></p>

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