document.addEventListener("DOMContentLoaded", function(){
    
    var showAll = document.getElementById("showAll");
    var addGame = document.getElementById("add");
    
    showAll.onclick = function showAllFromDB() {
        
        $.ajax({
            
            url:'showAllGames.php',
        
        })
                .done(function(showAllGames){
                    
                    document.getElementById("allGames").innerHTML = showAllGames;
                    
                })
                .fail(function(){
                
                    alert("FAIL");
                
                }); 
        
    };
    
    addGame.onclick = function addGameToDB(){
        
        $.ajax({
            
            url:'addGame.php'
            
        })
                .done(function(addGame){
                    
                    addGame;
                    
        })
                .fail(function(){
                    
                    alert("Failed to add game.");
                    
        });
        
    }
    
    
    
    
    
    
    
    
});