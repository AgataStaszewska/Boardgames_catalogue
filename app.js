document.addEventListener("DOMContentLoaded", function(){
    
    var showAll = document.getElementById("showall");
    
    showAll.onclick = function showAllGames() {
        
        $.ajax({
            url:'connect.php',
            type: 'GET',
            data: {action: showAll},
            processData: false,
            contentType: false
        })
                .done(function(data){
                
                    alert(data);
                
                })
                .fail(function(){
                
                    alert("FAIL");
                
}); 
        
    };
    
    
    
    
    
    
    
    
    
});