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

?><?php 
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

<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<?php

    if(isset($_GET['res'])){
    $res=$_GET['res'];
$submit=$_POST['submit'];
if(isset($submit)){
$rep=$_POST['rep'];
$c=count($contact3);
for($k=0;$k<$c;$k++){
    $id2=$contact3[$k]['id'];
    $titre2=$contact3[$k]['titre'];
    $test=$contact3[$k]['v_f'];
    $id3=$contact3[$k]['id1'];
    if($res==$id3&&$id2==$rep){
        if($test==0){
            echo "false";
        }
      if($test==1){
            echo "true";
        }
    }}}
}

?>
    </body></html>