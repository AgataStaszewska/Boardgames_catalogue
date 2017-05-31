<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <script src="jquery.js"></script>
        <script src="app.js"></script>  
        <title>Modify game</title>
    </head>   
    <body>
        <h3>Modify game information</h3>
        <form method="post">
            <label for="name">Title: </label>
            <input type="text" name="name" id="nameModify">
            <br>
            <label for="type">Type: </label>
            <input type="text" name="type" id="typeModify">
            <br>
            <label for="min_players">Min. players: </label>
            <input type="text" name="min_players" id="min_playersModify">
            <br>
            <label for="max_players">Max. players: </label>
            <input type="text" name="max_players" id="max_playersModify">
            <br>
            <label for="description">Description: </label>
            <input type="text" name="description" id="descriptionModify">
            <br>
            <input type="submit" value="Apply changes" id="modify">           
        </form> 
        
    </body>
    
<?php

//
//$gameTitle = $_POST['name'];
//
//echo $gameTitle;



