document.addEventListener("DOMContentLoaded", function(){
    
    var showAll = document.getElementById("showAll");
    var addGame = document.getElementById("add");
    var findByTitle = document.getElementById("findGameByTitle");
    var findByType = document.getElementById("findGameByType");
    var findByNumber = document.getElementById("findGameByNumber");
    var deleteGame = document.getElementById("deleteGame");
//    var gameTitle = document.getElementsByClassName("gameNameClass");
    var modifyButton = document.getElementsByClassName("modifyButton");
    var gameDescription = document.getElementsByClassName("gameDescritpion");
    var gameMaxNumber = document.getElementsByClassName("minPlayers");
    var gameMinNumber = document.getElementsByClassName("maxPlayers");

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
    
      findByTitle.onclick = function findGameByTitle(){
                  
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
      
        findByType.onclick = function findGameByType(){
                  
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
      
        findByNumber.onclick = function findGameByType(){
                  
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
        
        deleteGame.onclick = function deleteGameFromDB(){
            
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
            
        modifyButton.addEventListener('click', function(){ //won't work as well. Because class?
            
            
            
            console.log("AAA");
            
        });
//        modifyButton.onclick = function modifyGameTitle(){  //doesn't work. Whyyyy?
//            
//            console.log("AAAA");
//            
//        };
});