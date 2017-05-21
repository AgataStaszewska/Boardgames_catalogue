<?php
include "connect.php";

function showAllGames($conn){
    
    $result = $conn->query("SELECT * FROM boardgames");   
   
    echo "<table class='table'>";
            
    foreach($result->fetchAll() as $row) {
        
        echo "<tr><td class='gameName'>" . $row['name'] . 
             "</td><td class='gameDescription'>" . $row['description'] . 
             "</td><td class='minPlayers'>" . $row['min_nop'] . 
             "</td><td class='maxPlayers'>" . $row['max_nop'] .
             "</td></tr>";
        
    }
    
    echo "</table>";
    
}

echo showAllGames($connection);