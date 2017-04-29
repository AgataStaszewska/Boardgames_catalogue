<?php

require "connect.php";

    $name = $_POST['name'];
    $type = $_POST['type'];
    $numberOfPlayers = $_POST['numberOfplayers'];

function findGame($connection, $title, $type, $numberOfPlayers){
    
    $sql = "SELECT * FROM boardgames WHERE (name = :name, type = :type, minPlayers <= :numberOfPlayers && maxPlayers >= :numberOfPlayers)";

       $stmt = $connection->prepare($sql);
       $stmt->execute([ 'name' => $name,
                        'type' => $type,
                        'minPlayers' => $minPlayers,//Bez sensu!
                        'maxPlayers' => $maxPlayers,
                      ]);

    echo "<table class='table'>";
            
    foreach($sql->fetchAll() as $row) {
        
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['type'] . "</td></tr>" . $row['description'] . "</td></tr>";
        
    }
    
    echo "</table>";
       
}

echo findGame($connection, $title, $type, $numberOfPlayers);