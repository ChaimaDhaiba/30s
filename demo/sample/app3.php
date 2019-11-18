<html>
<head>

  <meta charset="utf-8">
  <title>30s</title>
</head>
    <body >
    <button onclick="post_data()">send var from js to php</button>
           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<?php
       if(!empty($_POST)){
           $obj=json_decode($_POST["myData"],true);
            print_r($obj["var_name"]);
       }

        
        
        ?>
<script>
    function post_data(){
        var dataPost = {
        var_name: "ecrire ici la valeur de variable"
        };
        var dataString = JSON.stringify(dataPost);

        $.ajax({
        url: 'cha.php',
        data: {myData: dataString},
        type: 'POST',
        success: function(response) {
            console.log("send succes");
        } });
    };
            
    
    
</script>

    </body>
</html>