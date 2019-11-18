
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
    $req=$con->prepare("SELECT * FROM etd");
    $res=$req->execute();
    $contact4=$req->fetchAll();
}
catch(PDOException $e){
    echo 'failed' . $e->getMessage();
}
?>
<?php
if(isset($_GET['delete'])){
$delete=$_GET['delete'];
$q=" DELETE FROM `theme` WHERE `id` = $delete";
$con->exec($q);
header("location:admin.php?res=1");
}
if(isset($_POST['submit1'])){
    $titre=$_POST['titre'];
  $q=" INSERT INTO `theme` VALUES(NULL,'$titre')";
$con->exec($q);
header("location:admin.php?res=1");  

}
if(isset($_POST['submit2'])){
    $titre=$_POST['titre'];
    $titre1=$_POST['titre1'];
  $q="UPDATE `theme` SET `titre` ='$titre1' WHERE `theme`.`id` = $titre";
$con->exec($q);
header("location:admin.php?res=1");  

}
?>
<?php
if(isset($_GET['delete1'])){
$delete1=$_GET['delete1'];
$q=" DELETE FROM `question` WHERE `id` = $delete1";
$con->exec($q);
header("location:admin.php?res=2");
}
if(isset($_POST['submit3'])){
    $titre=$_POST['titre'];
    $titre1=$_POST['titre1'];
  $q=" INSERT INTO `question` VALUES(NULL,'$titre','$titre1')";
$con->exec($q);
header("location:admin.php?res=2");  

}
if(isset($_POST['submit4'])){
    $titre=$_POST['titre'];
    $titre1=$_POST['titre1'];
  $q="UPDATE `question` SET `titre` ='$titre1' WHERE `question`.`id` = $titre";
$con->exec($q);
header("location:admin.php?res=2");  

}
?>
<?php
if(isset($_GET['delete3'])){
$delete1=$_GET['delete3'];
$q=" DELETE FROM `choix` WHERE `id` = $delete1";
$con->exec($q);
header("location:admin.php?res=3");
}
if(isset($_POST['submit5'])){
    $titre=$_POST['titre'];
    $titre1=$_POST['titre1'];
    $titre3=$_POST['titre3'];
  $q=" INSERT INTO `choix` VALUES(NULL,'$titre','$titre3','$titre1')";
$con->exec($q);
header("location:admin.php?res=3");  

}
if(isset($_POST['submit6'])){
    $titre=$_POST['titre'];
    $titre1=$_POST['titre1'];
  $q="UPDATE `choix` SET `titre` ='$titre1' WHERE `choix`.`id` = $titre";
$con->exec($q);
header("location:admin.php?res=3");  

}
?>
<?php
if(isset($_GET['delete4'])){
$delete1=$_GET['delete4'];
$q=" DELETE FROM `etd` WHERE `id` = $delete1";
$con->exec($q);
header("location:admin.php?res=4");
}
if(isset($_POST['submit7'])){
    $titre1=$_POST['titre1'];
    $titre3=$_POST['titre2'];
  $q=" INSERT INTO `etd` VALUES(NULL,'$titre1','$titre3',0)";
$con->exec($q);
header("location:admin.php?res=4");  

}
if(isset($_POST['submit8'])){
    $titre=$_POST['titre'];
    $titre1=$_POST['titre1'];
    $titre2=$_POST['titre2'];
  $q="UPDATE `etd` SET `nom` ='$titre1' , `psd` ='$titre2' WHERE `etd`.`id` = $titre";
$con->exec($q);
header("location:admin.php?res=4");  

}
?>
