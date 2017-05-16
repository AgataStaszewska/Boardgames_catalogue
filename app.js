document.addEventListener("DOMContentLoaded", function(){
    
    var showAll = document.getElementById("showAll");
    var addGame = document.getElementById("add");
    var findGame = document.getElementById("findGame");

    showAll.onclick = function showAllFromDB() {

        $.ajax({
            
            url:'showAllGames.php'
        
        })
                .done(function(showAllGames){
                    
                    document.getElementById("allGames").innerHTML = showAllGames;
                    
                })
                .fail(function(){
                
                    alert("FAIL");
                
                }); 
        
    };
    
    addGame.onclick = function addGameToDB(event) {
        
    var name = $("#name").val();
    var type = $("#type").val();
    var minPlayers = $("#min_players").val();
    var maxPlayers = $("#max_players").val();
    var description = $("#description").val();

        event.preventDefault();
        
        
        $.ajax({
            
            url:'addGame.php',
            method: 'POST',
            data: {name: name, type: type, minPlayers: minPlayers, maxPlayers: maxPlayers, description: description}     
        })
                .done(function(data){
                    
                    alert(data); //It works, why, though?
                    
                })
                .fail(function(){
                    
                    alert("FAILED TO ADD GAME");
                    
                });
        
    };
    
    findGame.onclick = function findGameFromDB() {
        
    var name = $("#name2").val();
    var type = $("#type2").val();
    var numberOfPlayers = $("#no_players").val();
    console.log("AAA");
        $.ajax({
            
            url:'findGame.php',
            method: 'POST',
            data: {name: name, type: type, numberOfPlayers: numberOfPlayers}      
        
        })
                .done(function(data){
                    
                    document.getElementById("gamesFound").innerHTML = data;
                    
                })
                .fail(function(){
                
                    alert("FAIL");
                
                }); 
        
    };
    
    
    
});