
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
<body style=" background-image: url(back2.png);background-repeat: no-repeat;width:100%">
<!--<div id="profile" style="background-color:white;">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>--><b id="logout"><a href="logout.php">Log Out</a></b>

    <div >
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

    }  }echo "
<input name=\"submit\" type=\"submit\" value=\" Login \">
</form> <br>";
}}    }}   }
    ?>
    <br><br><br><br><br><br><br>
        
        
        
        <p class="text-center" style="font-size:300px;text-align:center;color:white" >30s</p>
<a class="btn btn-large btn-primary " style="margin-left:20%;width:60%" href="begin.php?q=1"> BEGIN </a><br><br></div>
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