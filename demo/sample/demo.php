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
		<title>Roulette.js Demo</title>
		<link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css">
		<link rel="stylesheet" href="bootstrap-responsive.css">
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/ui-lightness/jquery-ui.css">
		<link rel="stylesheet" href="">
        <link rel="stylesheet" type="text/css" href="../../biblio/all.min.css">
<link href="../../biblio/nav1.css" rel="stylesheet">
<link href="../../biblio/styles1.css" rel="stylesheet">
<link href="../../biblio/swiper.min.css" rel="stylesheet">
<link href="../../biblio/bootstrap.min.css" rel="stylesheet">
	</head>
	<body style=" background-image: url(back2.png);background-repeat: no-repeat; 
                  background-attachment: fixed;width:100%">
	<?php       if(isset($_GET['res'])){
$res=$_GET['res'];
if($res==1){	
	echo "	<div class=\"container\">
<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br><br>		
    <div class=\"card-group\" >
            <div class=\"col-2\" style=\"color:white\"><br><br><br><br>";?>
	<?php 
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $j=$i+1;
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              echo "<h1>$j : $titre</h1>";
          }
          ?>
		<?php 
			echo "</div>
            <div class=\" row\" style=\"margin-left:15%\">
				<div class=\"span4\">
					<div class=\"roulette_container\" >
						<div class=\"roulette\" style=\"display:none;\">
							<img src=\"1%20(1).png\"/>
							<img src=\"2%20(1).png\"/>
							<img src=\"3%20(1).png\"/>
							<img src=\"4%20(1).png\"/>
							<img src=\"5%20(1).png\"/>
							<img src=\"6%20(1).png\"/>
							<img src=\"7%20(1).png\"/>
						</div>
					</div>
					<div class=\"btn_container\">
						<br><br>
                        <div style=\"margin-left:1%\" >
						<button class=\"btn btn-large btn-primary start\" style=\"width:100%\" > START </button>
					<!--	<button class=\"stop btn-large btn btn-warning\"> STOP </button>-->
						</div>
					</div>
				</div>
		
			</div>
      
            </div>
              <br><br><br>
<a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=1\"> BEGIN </a>
		</div>
   <script src=\"demo.js\"></script>";}

if($res==2){	
	echo "	<div class=\"container\">
<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br><br>		
    <div class=\"card-group\" >
            <div class=\"col-2\" style=\"color:white\"><br><br><br><br>";?>
	<?php 
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $j=$i+1;
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i<>3){
              echo "<h1>$j : $titre</h1>";}
          }
          ?>
		<?php 
			echo "</div>
            <div class=\" row\" style=\"margin-left:15%\">
				<div class=\"span4\">
					<div class=\"roulette_container\" >
						<div class=\"roulette\" style=\"display:none;\">
							<img src=\"1%20(1).png\"/>
							<img src=\"2%20(1).png\"/>
							<img src=\"3%20(1).png\"/>
							<img src=\"5%20(1).png\"/>
							<img src=\"6%20(1).png\"/>
							<img src=\"7%20(1).png\"/>
						</div>
					</div>
					<div class=\"btn_container\">
						<br><br>
                        <div style=\"margin-left:1%\" >
						<button class=\"btn btn-large btn-primary start\" style=\"width:100%\" > START </button>
					<!--	<button class=\"stop btn-large btn btn-warning\"> STOP </button>-->
						</div>
					</div>
				</div>
		
			</div>
      
            </div>
              <br><br><br>
<a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=3\"> BEGIN </a>
		</div>
   <script src=\"demo.js\"></script>";}

if($res==3){	
	echo "	<div class=\"container\">
<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br><br>		
    <div class=\"card-group\" >
            <div class=\"col-2\" style=\"color:white\"><br><br><br><br>";?>
	<?php 
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $j=$i+1;
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i<>3&&$i<>4){
              echo "<h1>$j : $titre</h1>";}
          }
          ?>
		<?php 
			echo "</div>
            <div class=\" row\" style=\"margin-left:15%\">
				<div class=\"span4\">
					<div class=\"roulette_container\" >
						<div class=\"roulette\" style=\"display:none;\">
							<img src=\"1%20(1).png\"/>
							<img src=\"2%20(1).png\"/>
							<img src=\"3%20(1).png\"/>
							<img src=\"6%20(1).png\"/>
							<img src=\"7%20(1).png\"/>
						</div>
					</div>
					<div class=\"btn_container\">
						<br><br>
                        <div style=\"margin-left:1%\" >
						<button class=\"btn btn-large btn-primary start\" style=\"width:100%\" > START </button>
					<!--	<button class=\"stop btn-large btn btn-warning\"> STOP </button>-->
						</div>
					</div>
				</div>
		
			</div>
      
            </div>
              <br><br><br>
<a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=5\"> BEGIN </a>
		</div>
   <script src=\"demo.js\"></script>";}

if($res==4){	
	echo "	<div class=\"container\">
<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br><br>		
    <div class=\"card-group\" >
            <div class=\"col-2\" style=\"color:white\"><br><br><br><br>";?>
	<?php 
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $j=$i+1;
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i<>3&&$i<>4&&$i<>5){
              echo "<h1>$j : $titre</h1>";}
          }
          ?>
		<?php 
			echo "</div>
            <div class=\" row\" style=\"margin-left:15%\">
				<div class=\"span4\">
					<div class=\"roulette_container\" >
						<div class=\"roulette\" style=\"display:none;\">
							<img src=\"1%20(1).png\"/>
							<img src=\"2%20(1).png\"/>
							<img src=\"3%20(1).png\"/>
							<img src=\"7%20(1).png\"/>
						</div>
					</div>
					<div class=\"btn_container\">
						<br><br>
                        <div style=\"margin-left:1%\" >
						<button class=\"btn btn-large btn-primary start\" style=\"width:100%\" > START </button>
					<!--	<button class=\"stop btn-large btn btn-warning\"> STOP </button>-->
						</div>
					</div>
				</div>
		
			</div>
      
            </div>
              <br><br><br>
<a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=7\"> BEGIN </a>
		</div>
   <script src=\"demo.js\"></script>";}
if($res==5){	
	echo "	<div class=\"container\">
<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br><br>		
    <div class=\"card-group\" >
            <div class=\"col-2\" style=\"color:white\"><br><br><br><br>";?>
	<?php 
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $j=$i+1;
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i<>3&&$i<>4&&$i<>5&&$i<>6){
              echo "<h1>$j : $titre</h1>";}
          }
          ?>
		<?php 
			echo "</div>
            <div class=\" row\" style=\"margin-left:15%\">
				<div class=\"span4\">
					<div class=\"roulette_container\" >
						<div class=\"roulette\" style=\"display:none;\">
							<img src=\"1%20(1).png\"/>
							<img src=\"2%20(1).png\"/>
							<img src=\"3%20(1).png\"/>
						</div>
					</div>
					<div class=\"btn_container\">
						<br><br>
                        <div style=\"margin-left:1%\" >
						<button class=\"btn btn-large btn-primary start\" style=\"width:100%\" > START </button>
					<!--	<button class=\"stop btn-large btn btn-warning\"> STOP </button>-->
						</div>
					</div>
				</div>
		
			</div>
      
            </div>
              <br><br><br>
<a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=9\"> BEGIN </a>
		</div>
   <script src=\"demo.js\"></script>";}
if($res==6){	
	echo "	<div class=\"container\">
<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br><br>		
    <div class=\"card-group\" >
            <div class=\"col-2\" style=\"color:white\"><br><br><br><br>";?>
	<?php 
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $j=$i+1;
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i<>3&&$i<>4&&$i<>5&&$i<>6&&$i<>0){
              echo "<h1>$j : $titre</h1>";}
          }
          ?>
		<?php 
			echo "</div>
            <div class=\" row\" style=\"margin-left:15%\">
				<div class=\"span4\">
					<div class=\"roulette_container\" >
						<div class=\"roulette\" style=\"display:none;\">
							<img src=\"2%20(1).png\"/>
							<img src=\"3%20(1).png\"/>
						</div>
					</div>
					<div class=\"btn_container\">
						<br><br>
                        <div style=\"margin-left:1%\" >
						<button class=\"btn btn-large btn-primary start\" style=\"width:100%\" > START </button>
					<!--	<button class=\"stop btn-large btn btn-warning\"> STOP </button>-->
						</div>
					</div>
				</div>
		
			</div>
      
            </div>
              <br><br><br>
<a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=11\"> BEGIN </a>
		</div>
   <script src=\"demo.js\"></script>";}
if($res==7){	
	echo "	<div class=\"container\">
<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br><br>		
    <div class=\"card-group\" >
            <div class=\"col-2\" style=\"color:white\"><br><br><br><br>";?>
	<?php 
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $j=$i+1;
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i<>3&&$i<>4&&$i<>5&&$i<>6&&$i<>0&&$i<>2){
              echo "<h1>$j : $titre</h1>";}
          }
          ?>
		<?php 
			echo "</div>
            <div class=\" row\" style=\"margin-left:15%\">
				<div class=\"span4\">
					<div class=\"roulette_container\" >
						<div class=\"roulette\" style=\"display:none;\">
							<img src=\"2%20(1).png\"/>
						</div>
					</div>
					<div class=\"btn_container\">
						<br><br>
                        <div style=\"margin-left:1%\" >
						<button class=\"btn btn-large btn-primary start\" style=\"width:100%\" > START </button>
					<!--	<button class=\"stop btn-large btn btn-warning\"> STOP </button>-->
						</div>
					</div>
				</div>
		
			</div>
      
            </div>
              <br><br><br>
<a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=13\"> BEGIN </a>
		</div>
   <script src=\"demo.js\"></script>";}
if($res==8){	
    $d=count($contact4);
    for($l=0;$l<$d;$l++){
              $id5 =$contact4[$l]['id'  ];
              $nom =$contact4[$l]['nom' ];
              $note=$contact4[$l]['note'];
         if($l==0){$note1=$note;$nom1 =$nom;
              $note1=$note;}}
              if($note1>$note){
echo "<div class=\"col-6 \" style=\"color:white;margin-left:25%;margin-top:15%\" ><br><br><h1 class=\"text-center\" >$nom1</h1><h1 class=\"text-center\" >$note1</h1></div>";  
              }       
        if($note1<$note){
echo "<div class=\"col-6\" style=\"color:white;margin-left:25%;margin-top:15%\"><br><br><h1 class=\"text-center\" >$nom</h1><h1 class=\"text-center\" >$note</h1></div>";  
              }  
        if($note1==$note){
echo "<div class=\"col-6\" style=\"color:white;margin-left:25%;margin-top:15%\"><br><br><h1 class=\"text-center\" >$nom</h1><h1 class=\"text-center\" >$note</h1></div>
<div class=\"col-6\" style=\"color:white;margin-left:25%;\"><br><br><h1 class=\"text-center\" >$nom1</h1><h1 class=\"text-center\" >$note1</h1></div>";  
              }
}}?>

      <script src="../../biblio/custom.js"></script>
      <script src="../../biblio/singlePageNav.js"></script>
      <script src="../../biblio/bootstrap.js"></script>
      <script src ="../../biblio/jquery-3.4.1.min.js"></script>
      <script src ="../../biblio/typed.min.js"></script>
      <script src ="../../biblio/typed.min.js"></script>
      <script src="../../biblio/bootstrap.min.js"></script>
      <script src="../../biblio/popper.min.js"></script>
      <script src="../../biblio/coverflow-slideshow.js"></script>
      <script src ="../../biblio/jquery.min.js"></script>
      <script src ="../../biblio/swiper.min.css"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="../../biblio/bootstrap.bundle.min.js"></script>
      <script src="../../biblio/jquery.easing.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
      <script src="../roulette.js"></script>
      <script src="demo.js"></script>

	</body>
</html>

