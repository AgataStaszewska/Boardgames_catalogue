<?php
//THIS DOESNT WORK
echo "AAA";

echo $_POST['name'];

require "connect.php";

if(isset($_POST['name'])){
    
         $name = $_POST['name'];
         showGameByTitle($connection, $name);
    
}


function showGameByTitle($connection, $name){
  
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