<?php

require "connect.php";
    
    if(isset($_POST['name'])){
        
         $name = $_POST['name'];
         findGameByTitle($connection, $name);
        
    }
    
    if(isset($_POST['type'])){
                
       $type = $_POST['type'];
       findGameByType($connection, $type);
       
    }
    
    if(isset($_POST['numberOfPlayers'])){
        
       $numberOfPlayers = $_POST['numberOfPlayers'];
       findGameByNumber($connection, $numberOfPlayers);
        
    }

function findGameByTitle($connection, $name){
  
       $sql = "SELECT * FROM boardgames WHERE name = :name";

       $stmt = $connection->prepare($sql);
       $stmt->execute([ 'name' => $name,

                      ]);

    echo "<table class='table'>";
            
    foreach($stmt->fetchAll() as $row) {
        
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['type'] . "</td><td>" . $row['description'] . "</td><td>" . $row['min_nop'] . "</td><td>" . $row['max_nop'] . "</td></tr>";

        
    }
    
    echo "</table>";
       
}

function findGameByType($connection, $type){
  
       $sql = "SELECT * FROM boardgames WHERE type = :type";

       $stmt = $connection->prepare($sql);
       $stmt->execute([ 'type' => $type,

                      ]);

    echo "<table class='table'>";
            
    foreach($stmt->fetchAll() as $row) {
        
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['type'] . "</td><td>" . $row['description'] . "</td><td>" . $row['min_nop'] . "</td><td>" . $row['max_nop'] . "</td></tr>";

        
    }
    
    echo "</table>";
       
}

function findGameByNumber($connection, $numberOfPlayers){
  
       $sql = "SELECT * FROM boardgames WHERE min_nop <= :numberOfPlayers AND max_nop >= :numberOfPlayers";

       $stmt = $connection->prepare($sql);
       $stmt->execute([ 'numberOfPlayers' => $numberOfPlayers,

                      ]);

    echo "<table class='table'>";
            
    foreach($stmt->fetchAll() as $row) {
        
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['type'] . "</td><td>" . $row['description'] . "</td></tr>";

        
    }
    
    echo "</table>";
       
}
