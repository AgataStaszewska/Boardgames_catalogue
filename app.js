document.addEventListener("DOMContentLoaded", function(){
    

    var showAllButton = document.getElementById("showAll");

    showAllButton.onclick = function showAllFromDB() {

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
    
    var addGameButton = document.getElementById("add");
    
    addGameButton.onclick = function addGameToDB(event) {
        
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
    
    var findByTitleButton = document.getElementById("findGameByTitle");  
    
    findByTitleButton.onclick = function findGameByTitle(){
                  
          var name = $("#name2").val();
          
          $.ajax({
            
            url:'findGame.php',
            method: 'POST',
            data: {name: name}      
        
        })
                .done(function(data){
                    
                    document.getElementById("gameTitle").innerHTML = data;
                    
                })
                .fail(function(){
                
                    alert("FAIL");
                
                }); 
          
    };
      
    var findByTypeButton = document.getElementById("findGameByType");
    
    findByTypeButton.onclick = function findGameByType(){
                  
          var type = $("#type2").val();
          
          $.ajax({
            
            url:'findGame.php',
            method: 'POST',
            data: {type: type}      
        
        })
                .done(function(data){
                    
                    document.getElementById("gameType").innerHTML = data;
                    
                })
                .fail(function(){
                
                    alert("FAIL");
                
                }); 
          
    };
    
    var findByNumberButton = document.getElementById("findGameByNumber");
      
    findByNumberButton.onclick = function findGameByType(){
                  
          var numberOfPlayers = $("#no_players").val();
          
          $.ajax({
            
            url:'findGame.php',
            method: 'POST',
            data: {numberOfPlayers: numberOfPlayers}      
        
        })
                .done(function(data){
                    
                    document.getElementById("gameNumber").innerHTML = data;
                    
                })
                .fail(function(){
                
                    alert("FAIL");
                
                }); 
          
        };
        
    var deleteGameButton = document.getElementById("deleteGame");
    
    deleteGameButton.onclick = function deleteGameFromDB(){
            
            var name = $("#name3").val();
            
            $.ajax({
                
                url:'deleteGame.php',
                method:'POST',
                data: {name: name}
             
            })
                    .done(function(data){
                        
                        alert("Game deleted");
                
                            })
                            
                    .fail(function(){
                        
                        alert("FAIL");
                        
                            });        
            };
          
    //here a for is needed as modifyButton is an array
          
    var modifyButtons = document.getElementsByClassName("modifyButton");

    for (var i = 0; i < modifyButtons.length; i++){
              
        modifyButtons[i].onclick = function(){
                  
                  console.log("AAA");
                  
        };
              
    }

});