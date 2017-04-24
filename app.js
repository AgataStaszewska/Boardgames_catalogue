document.addEventListener("DOMContentLoaded", function(){
    
    var showAll = document.getElementById("showAll");
    var addGame = document.getElementById("add");

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
    
    addGame.onsubmit = function addGameToDB() {
//    var title = document.getElementById("title").text();
    var title = $("#title").text();
//    var type = document.getElementById("type").text();
    var type = $("#type").text()
//    var minPlayers = document.getElementById("minPlayers").text();
    var minPlayers = $("#minPlayers").text();
//    var maxPlayers = document.getElementById("maxPlayers").text();
    var maxPlayers = $("#maxPlayers").text();
//    var description = document.getElementById("description").text();
    var description = $("#description").text();
        console.log("title");
        console.log("AAA");
        $.ajax({
            
            url:'addGame.php',
            type: 'POST',
            data: {title: title, type: type, minPlayers: minPlayers, maxPlayers: maxPlayers, description: description}
            
        })
                .done(function(addGame){
                    
                    
                    
        })
                .fail(function(){
                    
                    alert("Failed to add game.");
                    
        });
        
    };
    
    
    
    
    
    
    
    
});