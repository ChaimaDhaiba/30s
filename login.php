<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
$submit=$_POST['submit'];
$username=$_POST['username'];
$password=$_POST['password'];
if (isset($submit)) {
if (empty($username) || empty($password)) {
$error = "Username or Password is invalid";
}
else
{
$dsn='mysql:host=127.0.0.1;dbname=application';
$user='root';
$pass ='';
try {
    $con = new PDO($dsn,$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $req=$con->prepare("SELECT * FROM etd ");
    $res=$req->execute();
    $contact=$req->fetchAll();
    $a=count($contact);
  for($i=0;$i<$a;$i++){
      $id=$contact[$i]['id'];
      $nom=$contact[$i]['nom'];
      $psd=$contact[$i]['psd'];
   if($nom==$username&&$psd==$password){
     $_SESSION['login_user']=$username; 
     header('Location: profile.php'); 
   }
}}
catch(PDOException $e){
    echo 'failed' . $e->getMessage();
}

}}
?>