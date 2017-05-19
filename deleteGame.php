<?php

require "connect.php";

$name = $_POST['name'];

function deleteGame($conn, $name){
  
       $sql = "DELETE FROM boardgames WHERE name = :name";

       $stmt = $conn->prepare($sql);
       $stmt->execute([ 'name' => $name,

                      ]);
       
}

//deleteGame($connection, "AAA");