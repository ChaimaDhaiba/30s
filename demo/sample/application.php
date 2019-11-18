<?php 
$dsn='mysql:host=127.0.0.1;dbname=application';
$user='root';
$pass ='';
try {
    $con = new PDO($dsn,$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $req=$con->prepare("SELECT * FROM theme ");
    $res=$req->execute();
    $contact1=$req->fetchAll();
}
catch(PDOException $e){
    echo 'failed' . $e->getMessage();
}
?>
<?php 
$dsn='mysql:host=127.0.0.1;dbname=application';
$user='root';
$pass ='';
try {
    $con = new PDO($dsn,$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $req=$con->prepare("SELECT * FROM question ");
    $res=$req->execute();
    $contact2=$req->fetchAll();
}
catch(PDOException $e){
    echo 'failed' . $e->getMessage();
}
?>
<?php 
$dsn='mysql:host=127.0.0.1;dbname=application';
$user='root';
$pass ='';
try {
    $con = new PDO($dsn,$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $req=$con->prepare("SELECT * FROM choix ");
    $res=$req->execute();
    $contact3=$req->fetchAll();
}
catch(PDOException $e){
    echo 'failed' . $e->getMessage();
}
?>
<?php 
$dsn='mysql:host=127.0.0.1;dbname=application';
$user='root';
$pass ='';
try {
    $con = new PDO($dsn,$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $req=$con->prepare("SELECT * FROM etd ");
    $res=$req->execute();
    $contact4=$req->fetchAll();
}
catch(PDOException $e){
    echo 'failed' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
 

  <title>30s</title>

  <!-- Custom fonts for this theme -->
 
    <link rel="stylesheet" type="text/css" href="biblio/all.min.css">
          <link href="biblio/nav1.css" rel="stylesheet">
      <link href="biblio/styles1.css" rel="stylesheet">
      <link href="biblio/swiper.min.css" rel="stylesheet">
  <link href="biblio/bootstrap.min.css" rel="stylesheet">
    
        <style>

    </style>

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
<?php 
$a=count($contact1);

for($i=0;$i<$a;$i++){
    $id=$contact1[$i]['id'];
    if($i==0){
        $id1=$id;
        
    }
    if($i==$a-1){
        $id2=$id;

    }
}
 $choix=rand($id1,$id2); 
$a=count($contact1); 
        for($i=0;$i<$a;$i++){ $id=$contact1[$i]['id'];  if($i==0){$id1=$id; } if($i==$a-1){ $id2=$id; }} $choix=rand($id1,$id2);
        $q="INSERT INTO `choisir` (`id`, `id1`) VALUES (NULL, '$choix')";
        $con->exec($q);   
echo "$choix <br><a type=\"button\" class=\"btn btn-primary\" href=\"profile.php?res=$choix\"> BIGIN </a>";
?>
        <!--   <div  style="margin-left:30%">
 <canvas id="canvas" width="500" height="500" ></canvas><br>
            <input type="button" value="spin" style="float:left;" id='spin' class="inf" />
        </div>
    <h1  id="mydivtag" style="text-align:center;margin-left:-10%"></h1>
    <h1  id="q" style="text-align:center;margin-left:-10%"></h1>-->
<?php
  /*      
       $obj = json_decode($_POST["myData"]);

echo $obj->var;
        */
        
        ?>
<!--<form action="application.php" method="get"> <input type="param1" id="param1" onkeyup="stopRotateWheel(this.value)"></form>-->
<?php /*$x=$_GET['param1']; echo $x ; */?>
       <script>
var options = [<?php $a=count($contact1);
    for($i=0;$i<$a;$i++){
        if($i<$a-1){
        $id=$contact1[$i]['id'];
        $titre=$contact1[$i]['titre']; 
        echo "\"".$titre."\",";}
    else {echo "\"".$titre."\"";}
    }
?>];
 
var startAngle = 0;
var arc = Math.PI / (options.length / 2);
var spinTimeout = null;

var spinArcStart = 10;
var spinTime = 0;
var spinTimeTotal = 0;

var ctx;

document.getElementById("spin").addEventListener("click", spin);

function byte2Hex(n) {
  var nybHexString = "0123456789ABCDEF";
  return String(nybHexString.substr((n >> 4) & 0x0F,1)) + nybHexString.substr(n & 0x0F,1);
}

function RGB2Color(r,g,b) {
	return '#' + byte2Hex(r) + byte2Hex(g) + byte2Hex(b);
}

function getColor(item, maxitem) {
  var phase = 0;
  var center = 128;
  var width = 127;
  var frequency = Math.PI*2/maxitem;
  
  red   = Math.sin(frequency*item+2+phase) * width + center;
  green = Math.sin(frequency*item+0+phase) * width + center;
  blue  = Math.sin(frequency*item+4+phase) * width + center;
  
  return RGB2Color(red,green,blue);
}

function drawRouletteWheel() {
  var canvas = document.getElementById("canvas");
  if (canvas.getContext) {
    var outsideRadius = 200;
    var textRadius = 160;
    var insideRadius = 125;
    ctx = canvas.getContext("2d");
    ctx.clearRect(0,0,500,500);
    ctx.strokeStyle = "black";
    ctx.lineWidth = 2;
    ctx.font = 'bold 12px Helvetica, Arial';
    for(var i = 0; i < options.length; i++) {
      var angle = startAngle + i * arc;
      //ctx.fillStyle = colors[i];
      ctx.fillStyle = getColor(i, options.length);
      ctx.beginPath();
      ctx.arc(250, 250, outsideRadius, angle, angle + arc, false);
      ctx.arc(250, 250, insideRadius, angle + arc, angle, true);
      ctx.stroke();
      ctx.fill();
      ctx.save();
      ctx.shadowOffsetX = -1;
      ctx.shadowOffsetY = -1;
      ctx.shadowBlur    = 0;
      ctx.shadowColor   = "rgb(220,220,220)";
      ctx.fillStyle = "black";
      ctx.translate(250 + Math.cos(angle + arc / 2) * textRadius, 
                    250 + Math.sin(angle + arc / 2) * textRadius);
      ctx.rotate(angle + arc / 2 + Math.PI / 2);
      var text = options[i];
      ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
      ctx.restore();
    } 
    /*Arrow */ctx.fillStyle = "black";
    ctx.beginPath();
    ctx.moveTo(250 - 4, 250 - (outsideRadius + 5));
    ctx.lineTo(250 + 4, 250 - (outsideRadius + 5));
    ctx.lineTo(250 + 4, 250 - (outsideRadius - 5));
    ctx.lineTo(250 + 9, 250 - (outsideRadius - 5));
    ctx.lineTo(250 + 0, 250 - (outsideRadius - 13));
    ctx.lineTo(250 - 9, 250 - (outsideRadius - 5));
    ctx.lineTo(250 - 4, 250 - (outsideRadius - 5));
    ctx.lineTo(250 - 4, 250 - (outsideRadius + 5));
    ctx.fill();
  }
}

function spin() {
  spinAngleStart = Math.random() * 10 + 10;
  spinTime = 0;
  spinTimeTotal = Math.random() * 3 + 4 * 1000;
  rotateWheel();
}

function rotateWheel() {
  spinTime += 30;
  if(spinTime >= spinTimeTotal) {
    stopRotateWheel();
    return;
  }
  var spinAngle = spinAngleStart - easeOut(spinTime, 0, spinAngleStart, spinTimeTotal);
  startAngle += (spinAngle * Math.PI / 180);
  drawRouletteWheel();
  spinTimeout = setTimeout('rotateWheel()', 30);
}
function stopRotateWheel() {
  clearTimeout(spinTimeout);
  var degrees = startAngle * 180 / Math.PI + 90;
  var arcd = arc * 180 / Math.PI;
  var index = Math.floor((360 - degrees % 360) / arcd);
  ctx.save();
  ctx.font = 'bold 30px Helvetica, Arial';
  var text = options[index]
  var info=text
 ctx.fillText(text, 250 - ctx.measureText(text).width / 2, 250 + 10);
  ctx.restore();

      document.getElementById('mydivtag').innerHTML = text;

   //   document.getElementById('param1').innerHTML = text;
/*var dataPost = {
   "var": text
};
var dataString = JSON.stringify(dataPost);

$.ajax({
   url: 'application.php',
   data: {myData: dataString},
   type: 'POST',
   success: function(response) {
      alert(response);
   }*/   };
 /*   
    xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var str= text;
    }
  };
    xhttp.open("GET", "profile.php?q="+str, true);
  xhttp.send();   
}   */ 
/*var variableToSend = text;
$.post('application.php?res=1', {variable: variableToSend});*/   /* if(text=='a'){
        document.getElementById('q').innerHTML = "Question1";
        text1="Question1";
    } 
    if(text=='b'){
        document.getElementById('q').innerHTML = "Question2";
        text1="Question2";
    }  
if(text=='c'){
        document.getElementById('q').innerHTML = "Question3";
    text1="Question3";
    }*/
  /*  function envoyer(elt)
{
 document.getElementById("param1").value=stopRotateWheel();
 elt.form.submit();
}
*/

function easeOut(t, b, c, d) {
  var ts = (t/=d)*t;
  var tc = ts*t;
  return b+c*(tc + -3*ts + 3*t);
}
drawRouletteWheel();
</script>

<script>
 function post_data(){
        var text ="ch";
        var dataPost = {
        
        var_name: text
        };
        var dataString = JSON.stringify(dataPost);

        $.ajax({
        url: 'application.php',
        data: {myData: dataString},
        type: 'POST',
        success: function(response) {
            console.log("send succes");
        } });
    };
                    
</script>
    </body>
</html>
