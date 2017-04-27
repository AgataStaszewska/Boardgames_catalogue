<?php
require "connect.php";

    $name = $_POST['name'];
    $type = $_POST['type'];
    $minPlayers = $_POST['minPlayers'];
    $maxPlayers = $_POST['maxPlayers'];
    $description = $_POST['description'];

function addGame($name, $type, $minPlayers, $maxPlayers, $description, $conn){
    
      $sql = "INSERT INTO boardgames VALUES( NULL, :name, :type, :minPlayers, :maxPlayers, :description, NULL)";
    
    try {
       $stmt = $conn->prepare($sql);
       $stmt->execute([ 'name' => $name,
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

$response = addGame($name, $type, $minPlayers, $maxPlayers, $description, $connection);
echo $response;

//addGame("Elizjum", "karciana", 2, 4, "Karciana gra w realiach starożytnej Grecji polegająca na gromadzeniu kart z rodów poszczególnych bóstw i w ten sposób zdobywaniu punktów.", $connection);