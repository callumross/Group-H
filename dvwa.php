<?php
 if(isset($_GET['Submit'])){
     //Get Input
     $id = $_POST["id"];
     $id = mysqli_real_escape_string($GLOBALS["__mysqli_ston"], $id);
     $query = "SELECT first_name, last_name FROM grouph WHERE user-id = $id;";
     $result = mysqli_query($GLOBALS["_mysqli_ston"], $query) or die ('<pre>' . mysqli_error($GLOBALS["_mysqli_ston"]) . '<pre>');
     //Get results
     while($row=mysqli_fetch_assoc($result)){
         //Display values
         $first=$row["first_name"];
         $last=$row["last_name"];
         //Feedback for end user
         echo "<pre>ID: {$id}<br/> First name: {$first}<br/>Surname: {$last}</pre>";
     }
 }
?>