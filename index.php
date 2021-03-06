<?php
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en-uk">
    <head>
        <meta charset="utf-8">
        <title>HELP A SOUL Homepage</title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    </head>

    <body>
        <nav>
        <img id="logo" src="assets/images/logo.JPG" alt="MAKE SOMEONE SMILE"/>
                <div id="quicklinks">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="loginPage.php">Donate&Receive</a></li>
                        <li><a href="loginPage.php">Listings</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="loginPage.php">Login page</a></li>
                        <li><a href="signup.html">Sign up page</a></li>
                    </ul>
                </div> 
                <img id="banner" src="assets/images/banner.JPG" alt="BANNER"/>
        </nav>
        <!--START OF HEADER-->
        <header>
        <h2>Search for service</h2>
            <form action="searchListings.php" method="POST">
                <input type="text" name="location" placeholder="Aberdeen"/>
                <input type="submit" value="Search">
            </form>
        </header>
        <!--END OF HEADER-->


        <!--START OF MAIN-->
        <main class="grid-container">
            <section class="grid-66">
             <h1> WELCOME TO HELP A SOUL WEBSITE</h1>
             <img id="Donate1" src="assets/images/Donate1.jpg" alt="Donate to help"/>
                <h2>IMPORTANCE OF CHARITY</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>
        </main>
        <!--END OF MAIN-->

        <!--SIDE BAR START-->
        <aside class="grid-33">
            <!--NEWS START -->
            <article>
                <h3>Lattest News</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
            <!--NEWS END-->

            <!--EVENT START-->
            <article>
                <h3>Love is all we need</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </article>
            <!--EVENT END-->
        </aside>
        <!--SIDE BAR END-->

        <!--START OF FOOTER-->
        <footer>
            <p>(C) 2021 Group H CMM 004 RGU</p>
        </footer>
        <!--END OF FOOTER-->
    </body>
</html>