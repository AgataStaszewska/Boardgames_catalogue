<?php
include "connect.php";
var_dump($connection);
function showAllGames($conn){
    
    $result = $conn->query("SELECT * FROM boardgames");   
    echo "BBB";  
    var_dump($result);

    
  //  $row = $result->fetchAll();//BAD! BAD THINGS HAPPEN!
    
    echo "<table>";
            
    foreach($result->fetchAll() as $row) {
        
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td></tr>";
        
    }
    
    echo "</table>";
    
};

showAllGames($connection);