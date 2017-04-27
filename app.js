document.addEventListener("DOMContentLoaded", function(){
    
    var showAll = document.getElementById("showAll");
    var addGame = document.getElementById("add");
    
//    var name = $("#name").val();
//    var type = $("#type").val();
//    var minPlayers = $("#min_players").val();
//    var maxPlayers = $("#max_players").val();
//    var description = $("#description").val();


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
    
    console.log(name);
        
    //    event.stopPropagation();
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
    
    
    
});