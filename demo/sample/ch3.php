<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Roulette Wheel</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="biblio/all.min.css">
<link href="biblio/nav1.css" rel="stylesheet">
<link href="biblio/styles1.css" rel="stylesheet">
<link href="biblio/swiper.min.css" rel="stylesheet">
<link href="biblio/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

<div class="roulette" style="display:none;"> 
	<img src="http://example.com/star.png"/>
	<img src="http://example.com/flower.png"/>
	<img src="http://example.com/coin.png"/>
	<img src="http://example.com/mshroom.png"/>
	<img src="http://example.com/chomp.png"/>
</div> 
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
	'<?php $dsn=\'mysql:host=127.0.0.1;dbname=application\'; $user=\'root\'; $pass =\'\'; $con = new PDO($dsn,$user,$pass); $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION); $req=$con->prepare("SELECT * FROM theme"); $res=$req->execute(); $contact1=$req->fetchAll(); $a=count($contact1); for($i=0;$i<$a;$i++){ $id=$contact1[$i][\'id\'];  if($i==-1){$id1=$id; } if($i==$a-1){ $id2=$id; }} $choix=rand($id1,$id2); $q="INSERT INTO `choisir` (`id`,`id1`) VALUES (NULL, `$choix`)"; $con->exec($q); echo $id1 ?>'; 
    </script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
      <script src="../roulette.js"></script>
      <script src="demo.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
      <script src="biblio/custom.js"></script>
      <script src="biblio/singlePageNav.js"></script>
      <script src="biblio/bootstrap.js"></script>
<script src ="biblio/jquery-3.4.1.min.js"></script>
        <script src ="biblio/typed.min.js"></script>
     <script src ="biblio/typed.min.js"></script>
    <script src="biblio/bootstrap.min.js"></script>
    <script src="biblio/popper.min.js"></script>
<script src="biblio/coverflow-slideshow.js"></script>
 <script src ="biblio/jquery.min.js"></script>
    <script src ="biblio/swiper.min.css"></script>
             	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="biblio/bootstrap.bundle.min.js"></script>
  <script src="biblio/jquery.easing.min.js"></script>
  </body>
</html>