<?php
// Resume session if already logged in
    session_start();
    if(IsSet($_SESSION["username"]))
    {
        // If username is set redirect to homepage
        header("Location: home.php");
        exit();
    }

?>
<!DOCTYPE html>
<html>
<head>
        <div id="quicklinks">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="DonateandReceive.php">Donate&Receive</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div> 
        <img id="banner" src="assets/images/banner.JPG" alt="BANNER"/>
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
</head>
<body>
<nav>
<img id="logo" src="assets/images/logo.JPG" alt="MAKE SOMEONE SMILE"/>
</nav>  
    <header><h1 style="color:black;">Welcome to the SwapApp</h1>
        <h2>Search for service</h2>
            <form action="searchListings.php" method="POST">
                <input type="text" name="Goods/Services" placeholder=""/>
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
            <br>
            <span class="psw"><a href="signup.html">Create account?</a> Forgot <a href="#">password?</a></span>
        </div>
        <br>
        <div>
            <button type="submit">Log in</button>
        </div>
    </form>
</body>

</html>