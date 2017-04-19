document.addEventListener("DOMContentLoaded", function(){
    
    var showAll = document.getElementById("showAll");
    
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
    
    
    
    
    
    
    
    
    
});