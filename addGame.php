<?php
include "connect.php";
echo "AAA";

function addGame($conn){
    echo "BBB";
    $title = $_POST['title'];
    $type = $_POST['type'];
    $minPlayers = $_POST['min_players'];
    $maxPlayers = $_POST['max_players'];
    $description = $_POST['description'];
    
    $sql = "INSERT INTO boardgames VALUES (:title, :type, :minPlayers, :maxPlayers, :description)";
    
    try {
       $stmt = $conn->prepare($sql);
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

echo addGame($connection);