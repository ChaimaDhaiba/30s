
<?php
$dsn='mysql:host=127.0.0.1;dbname=application';
$user='root';
$pass ='';
session_start();
try {
    $con = new PDO($dsn,$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $req=$con->prepare("SELECT * FROM etd ");
    $res=$req->execute();
    $contact=$req->fetchAll();
    $user_check=$_SESSION['login_user'];
    $a=count($contact);
  for($i=0;$i<$a;$i++){
      $id=$contact[$i]['id'];
      $nom=$contact[$i]['nom'];
      $psd=$contact[$i]['psd'];
   if($nom==$user_check){
       $login_session=$nom;
       if(!isset($nom)){
header('Location: index.php'); // Redirecting To Home Page
}
   }  
}}
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
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
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
<body style=" background-image: url(back2.png);background-repeat: no-repeat;width:100%;color:white"><br><br><br><br><br><br><br><br><br><br><br>
<!--<div id="profile" style="background-color:white;">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>-->

    <?php 
    if(isset($_GET['res'])){
    $res=$_GET['res'];
                 $a=count($contact1);
      for($i=0;$i<$a;$i++){
    $id=$contact1[$i]['id'];
    $titre=$contact1[$i]['titre'];
 if($id==$res){
        echo "$titre <br>";
    $b=count($contact2);
for($j=0;$j<$b;$j++){
    $id=$contact2[$j]['id'];
    $titre1=$contact2[$j]['titre'];
    $id1=$contact2[$j]['id1'];
    if($id1==$res){
                echo "$titre1 <br>";
        $c=count($contact3);
                        echo "<form action=\"logout.php?res=$id\" method=\"post\">";

for($k=0;$k<$c;$k++){
    $id2=$contact3[$k]['id'];
    $titre2=$contact3[$k]['titre'];
    $id3=$contact3[$k]['id1'];
    if($id==$id3){
 echo "
<div class=\"form-check\">
  <input class=\"form-check-input\" type=\"radio\" name=\"rep\" id=\"exampleRadios1\" value=\"$id2\" checked>
  <label class=\"form-check-label\" for=\"exampleRadios1\">
   $titre2
  </label>
</div>";

    }  }
        echo "
<input name=\"submit\" type=\"submit\" value=\" Login \">
</form> <br>";
}}    }}   }
    ?>
   <br> <br> <br> <br> <br>    
<?php 
    if(isset($_GET['q'])){
    $q=$_GET['q'];
    if($q==1){
    $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==3){
              echo "<h1 class=\"text-center\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1  </h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){
               if(isset($_POST['submit'])){
               $titre6=$_POST['titre1'];
               if($v==1){
                     $d=count($contact4);
              for($l=0;$l<$d;$l++){
              $id5=$contact4[$l]['id'];
              $nom=$contact4[$l]['nom'];
              $note=$contact4[$l]['note'];
              if($login_session==$nom){
                   if($titre6==$id3){
                    $note1=$note+1;
                    $q="UPDATE `etd` SET `note` ='$note1'   WHERE `etd`.`id` = $id5";
                    $con->exec($q);
                   }}}
               }
               }
              }}}}}}
    echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"begin.php?q=2\"> BEGIN </a></div><br><br><br>";
    
    }
     if($q==2){
    $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==4){
              echo "<h1 class=\"text-center\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1  </h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){
               if(isset($_POST['submit'])){
               $titre6=$_POST['titre1'];
               if($v==1){
                     $d=count($contact4);
              for($l=0;$l<$d;$l++){
              $id5=$contact4[$l]['id'];
              $nom=$contact4[$l]['nom'];
              $note=$contact4[$l]['note'];
              if($login_session==$nom){
                   if($titre6==$id3){
                    $note1=$note+1;
                    $q="UPDATE `etd` SET `note` ='$note1'   WHERE `etd`.`id` = $id5";
                    $con->exec($q);
                   }}}
               }
               }
              }}}}}}
    echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"begin.php?q=3\"> BEGIN </a></div><br><br><br>";
    
    }
     if($q==3){
    $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==5){
              echo "<h1 class=\"text-center\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1  </h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){
               if(isset($_POST['submit'])){
               $titre6=$_POST['titre1'];
               if($v==1){
                     $d=count($contact4);
              for($l=0;$l<$d;$l++){
              $id5=$contact4[$l]['id'];
              $nom=$contact4[$l]['nom'];
              $note=$contact4[$l]['note'];
              if($login_session==$nom){
                   if($titre6==$id3){
                    $note1=$note+1;
                    $q="UPDATE `etd` SET `note` ='$note1'   WHERE `etd`.`id` = $id5";
                    $con->exec($q);
                   }}}
               }
               }
              }}}}}}
    echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"begin.php?q=4\"> BEGIN </a></div><br><br><br>";
    
    }
      if($q==4){
    $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==6){
              echo "<h1 class=\"text-center\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1  </h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){
               if(isset($_POST['submit'])){
               $titre6=$_POST['titre1'];
               if($v==1){
                     $d=count($contact4);
              for($l=0;$l<$d;$l++){
              $id5=$contact4[$l]['id'];
              $nom=$contact4[$l]['nom'];
              $note=$contact4[$l]['note'];
              if($login_session==$nom){
                   if($titre6==$id3){
                    $note1=$note+1;
                    $q="UPDATE `etd` SET `note` ='$note1'   WHERE `etd`.`id` = $id5";
                    $con->exec($q);
                   }}}
               }
               }
              }}}}}}
    echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"begin.php?q=5\"> BEGIN </a></div><br><br><br>";
    
    }
      if($q==5){
    $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==0){
              echo "<h1 class=\"text-center\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1  </h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){
               if(isset($_POST['submit'])){
               $titre6=$_POST['titre1'];
               if($v==1){
                     $d=count($contact4);
              for($l=0;$l<$d;$l++){
              $id5=$contact4[$l]['id'];
              $nom=$contact4[$l]['nom'];
              $note=$contact4[$l]['note'];
              if($login_session==$nom){
                   if($titre6==$id3){
                    $note1=$note+1;
                    $q="UPDATE `etd` SET `note` ='$note1'   WHERE `etd`.`id` = $id5";
                    $con->exec($q);
                   }}}
               }
               }
              }}}}}}
    echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"begin.php?q=6\"> BEGIN </a></div><br><br><br>";
    
    }
       if($q==6){
    $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==2){
              echo "<h1 class=\"text-center\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1  </h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){
               if(isset($_POST['submit'])){
               $titre6=$_POST['titre1'];
               if($v==1){
                     $d=count($contact4);
              for($l=0;$l<$d;$l++){
              $id5=$contact4[$l]['id'];
              $nom=$contact4[$l]['nom'];
              $note=$contact4[$l]['note'];
              if($login_session==$nom){
                   if($titre6==$id3){
                    $note1=$note+1;
                    $q="UPDATE `etd` SET `note` ='$note1'   WHERE `etd`.`id` = $id5";
                    $con->exec($q);
                   }}}
               }
               }
              }}}}}}
    echo "<br><br><br><a class=\"btn btn-large btn-primary \" style=\"margin-left:20%;width:60%\" href=\"begin.php?q=7\"> BEGIN </a></div><br><br><br>";
    
    }
       if($q==7){
    $a=count($contact1);
          for($i=0;$i<$a;$i++){
              $id=$contact1[$i]['id'];
              $titre=$contact1[$i]['titre'];
              if($i==1){
              echo "<h1 class=\"text-center\">$titre</h1>";
              $b=count($contact2);
              for($j=0;$j<$b;$j++){
              $id1=$contact2[$j]['id'];
              $titre1=$contact2[$j]['titre'];
              $id2=$contact2[$j]['id1'];
              if($id2==$id){
              echo "<h1 class=\"text-center\">$titre1  </h1>";
                   $c=count($contact3);
              for($k=0;$k<$c;$k++){
              $id3=$contact3[$k]['id'];
              $titre2=$contact3[$k]['titre'];
              $v=$contact3[$k]['v_f'];
              $id4=$contact3[$k]['id1'];
              if($id4==$id1){
               if(isset($_POST['submit'])){
               $titre6=$_POST['titre1'];
               if($v==1){
                     $d=count($contact4);
              for($l=0;$l<$d;$l++){
              $id5=$contact4[$l]['id'];
              $nom=$contact4[$l]['nom'];
              $note=$contact4[$l]['note'];
              if($login_session==$nom){
                   if($titre6==$id3){
                    $note1=$note+1;
                    $q="UPDATE `etd` SET `note` ='$note1'   WHERE `etd`.`id` = $id5";
                    $con->exec($q);
                   }}}
               }
               }
              }}}}}}

    
    }
    
    }
    
            ?>
<h1 class="text-center">BON COURAGE </h1>
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
</body>
</html>