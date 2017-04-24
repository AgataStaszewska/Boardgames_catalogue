<?php
include "connect.php";
echo "AAA";
    $title = $_POST['title'];
    var_dump($title);
    $type = $_POST['type'];
    $minPlayers = $_POST['minPlayers'];
    $maxPlayers = $_POST['maxPlayers'];
    $description = $_POST['description'];

function addGame($title, $type, $minPlayers, $maxPlayers, $description){
    echo "BBB";
    
    $sql = "INSERT INTO boardgames VALUES (:title, :type, :minPlayers, :maxPlayers, :description)";
    
    try {
       $stmt = $connection->prepare($sql);
       $stmt->execute([ 'title' => $title,
                        'type' => $type,
                        'minPlayers' => $minPlayers,
                        'maxPlayers' => $maxPlayers,
                        'description' => $description ]);
        echo("Boardgame added to the catalogue");
       } 
    catch (PDOException $e) {
        echo("Error while adding game: " . $e->getMessage());
    }
       
}

echo addGame($title, $type, $minPlayers, $maxPlayers, $description);