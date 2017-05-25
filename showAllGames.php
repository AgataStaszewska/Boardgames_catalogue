<?php
include "connect.php";

function showAllGames($conn){
    
    $result = $conn->query("SELECT * FROM boardgames");   
   
    echo "<table class='table'>";
            
    foreach($result->fetchAll() as $row) {
        
        echo "<tr class='gameNameClass'><td class='gameName'><input type='button' value='modify' class='modifyButton'>" . $row['name'] . 
             "</td><td class='gameDescription'>" . $row['description'] . 
             "</td><td class='minPlayers'>" . $row['min_nop'] . 
             "</td><td class='maxPlayers'>" . $row['max_nop'] .
             "</td></tr>";     
        
    }
    
    echo "</table>";
    
}

echo showAllGames($connection);