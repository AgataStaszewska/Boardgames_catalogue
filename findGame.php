<?php

require "connect.php";

//    $name = $_POST['name'];
//    $type = $_POST['type'];
//    $numberOfPlayers = $_POST['numberOfplayers'];

function findGame($connection, $name, $type, $numberOfPlayers){
//    function findGame($connection){
//
//       $result = $conn->query("SELECT * FROM boardgames"); 
  
       $sql = "SELECT * FROM boardgames WHERE name = :name OR type = :type OR (min_nop <= :numberOfPlayers AND max_nop >= :numberOfPlayers)";

       $stmt = $connection->prepare($sql);
       $stmt->execute([ 'name' => $name,
                        'type' => $type,
                        'numberOfPlayers' => $numberOfPlayers

                      ]);

    echo "<table class='table'>";
            
    foreach($stmt->fetchAll() as $row) {
        
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['type'] . "</td></tr>" . $row['description'] . "</td></tr>";
        
    }
    
    echo "</table>";
       
}

echo findGame($connection, "", "", "5");
//echo findGame($connection);
