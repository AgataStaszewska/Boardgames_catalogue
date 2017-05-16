<?php
include "connect.php";

function showAllGames($conn){
    
    $result = $conn->query("SELECT * FROM boardgames");   
   
    echo "<table class='table'>";
            
    foreach($result->fetchAll() as $row) {
        
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td></tr>";
        
    }
    
    echo "</table>";
    
}

echo showAllGames($connection);