<html>
<head>

  <meta charset="utf-8">
  <title>30s</title>
</head>
    <body >
   <!-- <button onclick="post_data()">send var from js to php</button>-->
           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<?php
    /*   if(!empty($_POST)){
           $obj=json_decode($_POST["myData"],true);
            print_r($obj["var_name"]);
           
       }
*/
        
        
        ?>
        <div class="roulette" style="display:none;"> 
	<img src="http://example.com/star.png"/>
	<img src="http://example.com/flower.png"/>
	<img src="http://example.com/coin.png"/>
	<img src="http://example.com/mshroom.png"/>
	<img src="http://example.com/chomp.png"/>
</div> 
	
<script>
   /* function post_data(){
        var dataPost = {
        var_name: "ecrire ici la valeur de variable"
        };
        var dataString = JSON.stringify(dataPost);

        $.ajax({
        url: 'ch1.php',
        data: {myData: dataString},
        type: 'POST',
        success: function(response) {
            console.log("send succes");
        } });
    };*/
</script>
<script>
    var option = {
	speed : 10,
	duration : 3,
	stopImageNumber : 0,
	startCallback : function() {
		console.log('start');
	},
	slowDownCallback : function() {
		console.log('slowDown');
	},
	stopCallback : function($stopElm) {
		console.log('stop');
	}
}
$('div.roulette').roulette(option);	
</script>

    </body>
</html>