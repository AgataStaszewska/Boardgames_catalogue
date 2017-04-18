document.addEventListener("DOMContentLoaded", function(){
    
    var showAll = document.getElementById("showall");
    
    showAll.onclick = function showAllFromDB() {
        
        $.ajax({
            url:'showAllGames.php'})
                .done(function(showAllGames){
                    
                    alert("AAA");
                    
                })
                .fail(function(){
                
                    alert("FAIL");
                
                }); 
        
    };
    
    
    
    
    
    
    
    
    
});