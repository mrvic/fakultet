<?php

?>

<html>
    <head></head>
    <body>
        
        
            
            //TODO submit ajax()
            
            http://thingsaker.com/blog/ajax-laravel-controller-method's
             'pbr'         => 'required|numeric',
            'nazMjesto'   => 'required',
            'sifZupanija' => 'required|numeric'
        
        
        <script>
        var pbr = 10000; // A random variable for this example

$.ajax({
    method: 'POST', // Type of response and matches what we said in the route
    url: '/mjesto', // This is the url we gave in the route
    data: {'pbr' : id,
           'nazMjesto':'Zagreb',
           'sifZupanija':21}, 
    success: function(response){ // What to do if we succeed
        console.log(response); 
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});
        
        </script>
        
        
    </body>
</html>
    
