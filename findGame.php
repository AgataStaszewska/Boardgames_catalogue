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
        
    }
    
//    $numberOfPlayers = $_POST['numberOfPlayers'];

//function findGame($connection, $name, $type, $numberOfPlayers){
//  
//       $sql = "SELECT * FROM boardgames WHERE name = :name OR type = :type OR (min_nop <= :numberOfPlayers AND max_nop >= :numberOfPlayers)";
//
//       $stmt = $connection->prepare($sql);
//       $stmt->execute([ 'name' => $name,
//                        'type' => $type,
//                        'numberOfPlayers' => $numberOfPlayers
//
//                      ]);
//
//    echo "<table class='table'>";
//            
//    foreach($stmt->fetchAll() as $row) {
//        
//        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['type'] . "</td><td>" . $row['description'] . "</td></tr>";
//
//        
//    }
//    
//    echo "</table>";
//       
//}
//
//findGame($connection, $name, $type, $numberOfPlayers);

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

//findGameByTitle($connection, $name);