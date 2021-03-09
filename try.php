<?php
include("connection.php");
    $sql = "SELECT * FROM listings WHERE 1";
    $result = $db->query($sql);
    while($row = $result->fetch_array()){
        $listingName = $row["listingName"];
        $listingLocation = $row["listingLocation"];
        $listingDescription = $row["listingDescription"];
        $goodOrService = $row["goodOrService"];
        $listingPostcode = $row["listingPostcode"];
        echo "<p>{$listingName}</p>
                    <p>{$listingLocation}</p>
                    <p>{$listingDescription}</p>
                    <p>{$goodOrService}</p>
                    <p>{$listingPostcode}</p><br>";                    
    }
?>