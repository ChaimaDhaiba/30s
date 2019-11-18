<?php 
$dsn='mysql:host=127.0.0.1;dbname=application';
$user='root';
$pass ='';
try {
    $con = new PDO($dsn,$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $req=$con->prepare("SELECT * FROM choisir ");
    $res=$req->execute();
    $contact5=$req->fetchAll();
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

for($i=0;$i<$a;$i++){
    $id=$contact1[$i]['id'];
    if($id==$choix){
        $a=count($contact1);

for($i=0;$i<$a;$i++){
    $id=$contact1[$i]['id'];
    if($id==$choix){
   

        
    }}}
    }

echo "$choix <br><a type=\"button\" class=\"btn btn-primary\" href=\"profile.php?res=$choix\"> BIGIN </a>";
?>



      </body>
</html>
