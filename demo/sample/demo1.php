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
	<body style="background-color:black;color:white">
		
		<div class="">
		<!--	<div class="page-header" style="">
				<h1>
					30s
				</h1>
			</div>-->
               
            
            <div class="">
	<?php 
        if(isset($_GET['res'])){
$res=$_GET['res'];
            if($res==1){
            echo "		<div class=\"container\">
<video autoplay width=\"100%\"  >
  <source src=\"Countdown3.mp4\" type=\"video/mp4\">
  Your browser does not support HTML5 video.
</video>";
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==3){
              echo "<h1 class=\"text-center\">$titre</h1><br>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1</h1>";

              }}
              }
          } 
echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=2\"> RESULTAT </a></div>";

            }
            if($res==2){
         echo "<div style=\" background-image: url(back1.png);background-repeat: no-repeat; 
                  background-attachment: fixed;width:100%\"><br><br><br><br><br><br><br><br><br><br><br><br><br>"; 
          $a=count($contact1);
        for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==3){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre1</h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){

               if($v==1){
                   echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">la reponse est : $titre2</h1>";
                     $d=count($contact4);
                   echo "<div class=\"card-group\">";
              for($l=0;$l<$d;$l++){
              $id5 =$contact4[$l]['id'  ];
              $nom =$contact4[$l]['nom' ];
              $note=$contact4[$l]['note'];
                  echo "<div class=\"col-6\" ><br><br>
                  <h1 class=\"text-center\" >$nom</h1>
                  <h1 class=\"text-center\" >$note</h1>
                  </div>";
                   
 }
                   echo "</div>";
               }
               }
              }}}}}
    echo "<br><br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo.php?res=2\"> BEGIN </a><br><br><br><br><br><br></div>";

            }
              if($res==3){
            echo "		<div class=\"container\">
<video autoplay width=\"100%\"  >
  <source src=\"Countdown3.mp4\" type=\"video/mp4\">
  Your browser does not support HTML5 video.
</video>";
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==4){
              echo "<h1 class=\"text-center\">$titre</h1><br>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1</h1>";

              }}
              }
          } 
echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=4\"> RESULTAT </a></div>";

            }
              if($res==4){
         echo "<div style=\" background-image: url(back1.png);background-repeat: no-repeat; 
                  background-attachment: fixed;width:100%\"><br><br><br><br><br><br><br><br><br><br><br><br><br>"; 
          $a=count($contact1);
        for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==4){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre1</h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){

               if($v==1){
                   echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">la reponse est : $titre2</h1>";
                     $d=count($contact4);
                   echo "<div class=\"card-group\">";
              for($l=0;$l<$d;$l++){
              $id5 =$contact4[$l]['id'  ];
              $nom =$contact4[$l]['nom' ];
              $note=$contact4[$l]['note'];
                  echo "<div class=\"col-6\" ><br><br>
                  <h1 class=\"text-center\" >$nom</h1>
                  <h1 class=\"text-center\" >$note</h1>
                  </div>";
                   
 }
                   echo "</div>";
               }
               }
              }}}}}
    echo "<br><br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo.php?res=3\"> BEGIN </a><br><br><br><br><br><br></div>";

            }
       if($res==5){
            echo "		<div class=\"container\">
<video autoplay width=\"100%\"  >
  <source src=\"Countdown3.mp4\" type=\"video/mp4\">
  Your browser does not support HTML5 video.
</video>";
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==5){
              echo "<h1 class=\"text-center\">$titre</h1><br>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1</h1>";

              }}
              }
          } 
echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=6\"> RESULTAT </a></div>";

            }
              if($res==6){
         echo "<div style=\" background-image: url(back1.png);background-repeat: no-repeat; 
                  background-attachment: fixed;width:100%\"><br><br><br><br><br><br><br><br><br><br><br><br><br>"; 
          $a=count($contact1);
        for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==5){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre1</h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){

               if($v==1){
                   echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">la reponse est : $titre2</h1>";
                     $d=count($contact4);
                   echo "<div class=\"card-group\">";
              for($l=0;$l<$d;$l++){
              $id5 =$contact4[$l]['id'  ];
              $nom =$contact4[$l]['nom' ];
              $note=$contact4[$l]['note'];
                  echo "<div class=\"col-6\" ><br><br>
                  <h1 class=\"text-center\" >$nom</h1>
                  <h1 class=\"text-center\" >$note</h1>
                  </div>";
                   
 }
                   echo "</div>";
               }
               }
              }}}}}
    echo "<br><br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo.php?res=4\"> BEGIN </a><br><br><br><br><br><br></div>";

            }
    if($res==7){
            echo "		<div class=\"container\">
<video autoplay width=\"100%\"  >
  <source src=\"Countdown3.mp4\" type=\"video/mp4\">
  Your browser does not support HTML5 video.
</video>";
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==6){
              echo "<h1 class=\"text-center\">$titre</h1><br>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1</h1>";

              }}
              }
          } 
echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=8\"> RESULTAT </a></div>";

            
    }
              if($res==8){
         echo "<div style=\" background-image: url(back1.png);background-repeat: no-repeat; 
                  background-attachment: fixed;width:100%\"><br><br><br><br><br><br><br><br><br><br><br><br><br>"; 
          $a=count($contact1);
        for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==6){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre1</h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){

               if($v==1){
                   echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">la reponse est : $titre2</h1>";
                     $d=count($contact4);
                   echo "<div class=\"card-group\">";
              for($l=0;$l<$d;$l++){
              $id5 =$contact4[$l]['id'  ];
              $nom =$contact4[$l]['nom' ];
              $note=$contact4[$l]['note'];
                  echo "<div class=\"col-6\" ><br><br>
                  <h1 class=\"text-center\" >$nom</h1>
                  <h1 class=\"text-center\" >$note</h1>
                  </div>";
                   
 }
                   echo "</div>";
               }
               }
              }}}}}
    echo "<br><br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo.php?res=5\"> BEGIN </a><br><br><br><br><br><br></div>";

            }
 if($res==9){
            echo "		<div class=\"container\">
<video autoplay width=\"100%\"  >
  <source src=\"Countdown3.mp4\" type=\"video/mp4\">
  Your browser does not support HTML5 video.
</video>";
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==0){
              echo "<h1 class=\"text-center\">$titre</h1><br>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1</h1>";

              }}
              }
          } 
echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=10\"> RESULTAT </a></div>";

            }
              if($res==10){
         echo "<div style=\" background-image: url(back1.png);background-repeat: no-repeat; 
                  background-attachment: fixed;width:100%\"><br><br><br><br><br><br><br><br><br><br><br><br><br>"; 
          $a=count($contact1);
        for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==0){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre1</h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){

               if($v==1){
                   echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">la reponse est : $titre2</h1>";
                     $d=count($contact4);
                   echo "<div class=\"card-group\">";
              for($l=0;$l<$d;$l++){
              $id5 =$contact4[$l]['id'  ];
              $nom =$contact4[$l]['nom' ];
              $note=$contact4[$l]['note'];
                  echo "<div class=\"col-6\" ><br><br>
                  <h1 class=\"text-center\" >$nom</h1>
                  <h1 class=\"text-center\" >$note</h1>
                  </div>";
                   
 }
                   echo "</div>";
               }
               }
              }}}}}
    echo "<br><br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo.php?res=6\"> BEGIN </a><br><br><br><br><br><br></div>";

            }
 if($res==11){
            echo "		<div class=\"container\">
<video autoplay width=\"100%\"  >
  <source src=\"Countdown3.mp4\" type=\"video/mp4\">
  Your browser does not support HTML5 video.
</video>";
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==2){
              echo "<h1 class=\"text-center\">$titre</h1><br>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1</h1>";

              }}
              }
          } 
echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=12\"> RESULTAT </a></div>";

            }
              if($res==12){
         echo "<div style=\" background-image: url(back1.png);background-repeat: no-repeat; 
                  background-attachment: fixed;width:100%\"><br><br><br><br><br><br><br><br><br><br><br><br><br>"; 
          $a=count($contact1);
        for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==2){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre1</h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){

               if($v==1){
                   echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">la reponse est : $titre2</h1>";
                     $d=count($contact4);
                   echo "<div class=\"card-group\">";
              for($l=0;$l<$d;$l++){
              $id5 =$contact4[$l]['id'  ];
              $nom =$contact4[$l]['nom' ];
              $note=$contact4[$l]['note'];
                  echo "<div class=\"col-6\" ><br><br>
                  <h1 class=\"text-center\" >$nom</h1>
                  <h1 class=\"text-center\" >$note</h1>
                  </div>";
                   
 }
                   echo "</div>";
               }
               }
              }}}}}
    echo "<br><br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo.php?res=7\"> BEGIN </a><br><br><br><br><br><br></div>";

            }
if($res==13){
            echo "		<div class=\"container\">
<video autoplay width=\"100%\"  >
  <source src=\"Countdown3.mp4\" type=\"video/mp4\">
  Your browser does not support HTML5 video.
</video>";
          $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==1){
              echo "<h1 class=\"text-center\">$titre</h1><br>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1</h1>";

              }}
              }
          } 
echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo1.php?res=14\"> RESULTAT </a></div>";

            }
              if($res==14){
         echo "<div style=\" background-image: url(back1.png);background-repeat: no-repeat; 
                  background-attachment: fixed;width:100%\"><br><br><br><br><br><br><br><br><br><br><br><br><br>"; 
          $a=count($contact1);
        for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==1){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">$titre1</h1>";
              $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){
              if($v==1){
              echo "<h1 class=\"text-center\" style=\"margin-left:2%;\">la reponse est : $titre2</h1>";
              $d=count($contact4);
              echo "<div class=\"card-group\">";
              for($l=0;$l<$d;$l++){
              $id5 =$contact4[$l]['id'  ];
              $nom =$contact4[$l]['nom' ];
              $note=$contact4[$l]['note'];
              echo "<div class=\"col-6\" ><br><br>
                  <h1 class=\"text-center\" >$nom</h1>
                  <h1 class=\"text-center\" >$note</h1>
                  </div>";
                   
 }
                   echo "</div>";
               }
               }
              }}}}}
    echo "<br><br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"demo.php?res=8\"> BEGIN </a><br><br><br><br><br><br></div>";

            }

        
        }
          ?>
		
			</div>
            <br><br><br>

		</div>
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

