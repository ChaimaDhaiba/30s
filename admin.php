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
<html>
<header>
<title>admin 30s</title>   
<link rel="stylesheet" type="text/css" href="biblio/all.min.css">
<link href="biblio/nav1.css" rel="stylesheet">
<link href="biblio/styles1.css" rel="stylesheet">
<link href="biblio/swiper.min.css" rel="stylesheet">
<link href="biblio/bootstrap.min.css" rel="stylesheet">
    <style>
        .b{
            width: 80%;
        }
    </style>
    
</header>
<body>
    	
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item"  style="margin-left:0%">
        <a class="nav-link "   href="admin.php?res=1">theme</a>
      </li>
      <li class="nav-item" style="margin-left:0%">
        <a class="nav-link"  href="admin.php?res=2">question</a>
      </li>
 <li class="nav-item" style="margin-left:0%">
        <a class="nav-link"  href="admin.php?res=3">choix</a>
      </li>
 <li class="nav-item" style="margin-left:0%">
        <a class="nav-link"  href="admin.php?res=4">etudiant</a>
      </li>

    </ul>
  </div>

</div>
    <?php     
    if(isset($_GET['res'])){
    $res=$_GET['res'];
if($res==1){
   echo" <br><br> <div class=\"card\" style=\"margin-left:5%;margin-right:5%;color:#1a7271\"> 
 <h1>theme</h1>";
     echo "
 <table class=\"table table-bordered table-hover table-stripped\" style=\"color:#1a7271\" >
      <tr>
        <th>Id</th>
        <th>Titre</th>
          <th>Supprimer</th>
        </tr>";
      $a=count($contact1);
     for($i=0;$i<$a;$i++){
         $id=$contact1[$i]['id'];
         $title=$contact1[$i]['titre'];

echo "
<tr><td>$id</td><td>$title</td><td><a href=\"req.php?delete=$id\" onclick=\"return confirm('are you sure?');\">supprimer</a></td></tr>
";
}
echo "
        </table>";       
echo "
    <div class=\"container cadre\" >
    <div class=\" center orga-cadre\" style=\"border: 2px solid #1a7271;\">
    <div class=\"card-body\">
    <h2 class=\"text1\" id=\"ADMIN\" style=\"color: #1a7271;\">AJOUTER UN THEME</h2>
    <form action=\"req.php?add=1\" method=\"POST\">
    <div class=\"text-center\"   > 
    <div class=\"form-group\">
    <input type=\"text\" class=\"form-control\" id=\"text\" placeholder=\"titre\" name=\"titre\">
    </div>
<button type=\"submit\" class=\"btn inf\" name=\"submit1\" style=\"margin-left: -0%;background-color: #1a7271;color:white\">AJOUTER</button>
    </div>
    </form>
    </div>
    </div><br>
";
echo "</div>            <div class=\"container cadre\" >
  <div class=\" center orga-cadre\" style=\"border: 2px solid #1a7271;\">
    <div class=\"card-body\">
     <h2 class=\"text1\" id=\"ADMIN\" style=\"color: #1a7271;\">MODIFIER UN THEME</h2>
            <form action=\"req.php\" method=\"POST\" >
                <div class=\"text-center\">
    </div>";
      $a=count($contact1);
     for($i=0;$i<$a;$i++){
         $id=$contact1[$i]['id'];
         $title=$contact1[$i]['titre'];
echo "
<div class=\"form-check\">
  <input class=\"form-check-input\" type=\"radio\" name=\"titre\" id=\"exampleRadios2\" value=\"$id\">
  <label class=\"form-check-label\" for=\"exampleRadios2\">
    $title
  </label>
</div><br>";
     }
    
             echo"    
             <div class=\"form-group\">
<input type=\"text\" class=\"form-control\" id=\"text \" placeholder=\"titre\" name=\"titre1\">
                    </div>
<button type=\"submit\" class=\"btn \" name=\"submit2\" style=\"margin-left:-0%;background-color: #1a7271;color:white\">MODIFIER</button>
                </div>
            </form>
    </div>
  </div><br>
</div>";
     
         

     
     
    }
if($res==2){
   echo" <br><br> <div class=\"card\" style=\"margin-left:5%;margin-right:5%;color:#1a7271\"> 
 <h1>question</h1>";
     echo "
 <table class=\"table table-bordered table-hover table-stripped\" style=\"color:#1a7271\" >
      <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Id1</th>
          <th>Supprimer</th>
        </tr>";
      $b=count($contact2);
     for($i=0;$i<$b;$i++){
         $id=$contact2[$i]['id'];
         $title=$contact2[$i]['titre'];
         $id1=$contact2[$i]['id1'];

echo "
<tr><td>$id</td><td>$title</td><td>$id1</td><td><a href=\"req.php?delete1=$id\" onclick=\"return confirm('are you sure?');\">supprimer</a></td></tr>
";
}
echo "
        </table>";       
echo "
    <div class=\"container cadre\" >
    <div class=\" center orga-cadre\" style=\"border: 2px solid #1a7271;\">
    <div class=\"card-body\">
    <h2 class=\"text1\" id=\"ADMIN\" style=\"color: #1a7271;\">AJOUTER UN question</h2>
    <form action=\"req.php\" method=\"POST\">
    <div class=\"text-center\"   > 
    ";
       $a=count($contact1);
     for($i=0;$i<$a;$i++){
         $id3=$contact1[$i]['id'];
         $title=$contact1[$i]['titre'];
echo "
<div class=\"form-check\">
  <input class=\"form-check-input\" type=\"radio\" name=\"titre1\" id=\"exampleRadios2\" value=\"$id3\">
  <label class=\"form-check-label\" for=\"exampleRadios2\">
    $title
  </label>
</div><br>";
     }
    echo "<div class=\"form-group\">
    <input type=\"text\" class=\"form-control\" id=\"text\" placeholder=\"titre\" name=\"titre\">
    </div>
<button type=\"submit\" class=\"btn inf\" name=\"submit3\" style=\"margin-left: -0%;background-color: #1a7271;color:white\">AJOUTER</button>
    </div>
    </form>
    </div>
    </div><br>
";
echo "</div>            <div class=\"container cadre\" >
  <div class=\" center orga-cadre\" style=\"border: 2px solid #1a7271;\">
    <div class=\"card-body\">
     <h2 class=\"text1\" id=\"ADMIN\" style=\"color: #1a7271;\">MODIFIER UN THEME</h2>
            <form action=\"req.php\" method=\"POST\" >
                <div class=\"text-center\">
    </div>";
      $b=count($contact2);
     for($i=0;$i<$b;$i++){
         $id=$contact2[$i]['id'];
         $title=$contact2[$i]['titre'];
echo "
<div class=\"form-check\">
  <input class=\"form-check-input\" type=\"radio\" name=\"titre\" id=\"exampleRadios2\" value=\"$id\">
  <label class=\"form-check-label\" for=\"exampleRadios2\">
    $title
  </label>
</div><br>";
     }
    
             echo"    
             <div class=\"form-group\">
<input type=\"text\" class=\"form-control\" id=\"text \" placeholder=\"titre\" name=\"titre1\">
                    </div>
<button type=\"submit\" class=\"btn \" name=\"submit4\" style=\"margin-left:-0%;background-color: #1a7271;color:white\">MODIFIER</button>
                </div>
            </form>
    </div>
  </div><br>
</div>";
     
         

     
     
    }
if($res==3){
   echo" <br><br> <div class=\"card\" style=\"margin-left:5%;margin-right:5%;color:#1a7271\"> 
 <h1>choix</h1>";
     echo "
 <table class=\"table table-bordered table-hover table-stripped\" style=\"color:#1a7271\" >
      <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>v_f</th>
        <th>Id1</th>
          <th>Supprimer</th>
        </tr>";
      $c=count($contact3);
     for($i=0;$i<$c;$i++){
         $id=$contact3[$i]['id'];
         $title=$contact3[$i]['titre'];
         $test=$contact3[$i]['v_f'];
         $id1=$contact3[$i]['id1'];
echo "
<tr><td>$id</td><td>$title</td><td>$test</td><td>$id1</td><td><a href=\"req.php?delete3=$id\" onclick=\"return confirm('are you sure?');\">supprimer</a></td></tr>
";
}
echo "
        </table>";       
echo "
    <div class=\"container cadre\" >
    <div class=\" center orga-cadre\" style=\"border: 2px solid #1a7271;\">
    <div class=\"card-body\">
    <h2 class=\"text1\" id=\"ADMIN\" style=\"color: #1a7271;\">AJOUTER UN question</h2>
    <form action=\"req.php\" method=\"POST\">
    <div class=\"text-center\"   > 
    ";
       $b=count($contact2);
     for($i=0;$i<$b;$i++){
         $id3=$contact2[$i]['id'];
         $title=$contact2[$i]['titre'];
echo "
<div class=\"form-check\">
  <input class=\"form-check-input\" type=\"radio\" name=\"titre1\" id=\"exampleRadios2\" value=\"$id3\">
  <label class=\"form-check-label\" for=\"exampleRadios2\">
    $title
  </label>
</div><br>";
     }
    echo "<div class=\"form-group\">
    <input type=\"text\" class=\"form-control\" id=\"text\" placeholder=\"titre\" name=\"titre3\">
    </div>
<div class=\"form-group\">
    <input type=\"text\" class=\"form-control\" id=\"text\" placeholder=\"v_f\" name=\"titre\">
    </div>
<button type=\"submit\" class=\"btn inf\" name=\"submit5\" style=\"margin-left: -0%;background-color: #1a7271;color:white\">AJOUTER</button>
    </div>
    </form>
    </div>
    </div><br>
";
echo "</div>            <div class=\"container cadre\" >
  <div class=\" center orga-cadre\" style=\"border: 2px solid #1a7271;\">
    <div class=\"card-body\">
     <h2 class=\"text1\" id=\"ADMIN\" style=\"color: #1a7271;\">MODIFIER UN THEME</h2>
            <form action=\"req.php\" method=\"POST\" >
                <div class=\"text-center\">
    </div>";
      $c=count($contact3);
     for($i=0;$i<$c;$i++){
         $id=$contact3[$i]['id'];
         $title=$contact3[$i]['titre'];
echo "
<div class=\"form-check\">
  <input class=\"form-check-input\" type=\"radio\" name=\"titre\" id=\"exampleRadios2\" value=\"$id\">
  <label class=\"form-check-label\" for=\"exampleRadios2\">
    $title
  </label>
</div><br>";
     }
    echo"    
             <div class=\"form-group\">
<input type=\"text\" class=\"form-control\" id=\"text \" placeholder=\"titre\" name=\"titre1\">
                    </div>
<button type=\"submit\" class=\"btn \" name=\"submit6\" style=\"margin-left:-0%;background-color: #1a7271;color:white\">MODIFIER</button>
                </div>
            </form>
    </div>
  </div><br>
</div>";}
if($res==4){
   echo" <br><br> <div class=\"card\" style=\"margin-left:5%;margin-right:5%;color:#1a7271\"> 
 <h1>choix</h1>";
     echo "
 <table class=\"table table-bordered table-hover table-stripped\" style=\"color:#1a7271\" >
      <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>mot de passe</th>
        <th>Note</th>
          <th>Supprimer</th>
        </tr>";
      $d=count($contact4);
     for($i=0;$i<$d;$i++){
         $id=$contact4[$i]['id'];
         $title=$contact4[$i]['nom'];
         $test=$contact4[$i]['psd'];
         $id1=$contact4[$i]['note'];
echo "
<tr><td>$id</td><td>$title</td><td>$test</td><td>$id1</td><td><a href=\"req.php?delete4=$id\" onclick=\"return confirm('are you sure?');\">supprimer</a></td></tr>
";
}
echo "
        </table>";       
echo "
    <div class=\"container cadre\" >
    <div class=\" center orga-cadre\" style=\"border: 2px solid #1a7271;\">
    <div class=\"card-body\">
    <h2 class=\"text1\" id=\"ADMIN\" style=\"color: #1a7271;\">AJOUTER UN condidat</h2>
    <form action=\"req.php\" method=\"POST\">
    <div class=\"text-center\"   > 
    ";
         echo "<div class=\"form-group\">
    <input type=\"text\" class=\"form-control\" id=\"text\" placeholder=\"Nom\" name=\"titre1\">
    </div>
<div class=\"form-group\">
    <input type=\"text\" class=\"form-control\" id=\"text\" placeholder=\"mot de passe\" name=\"titre2\">
    </div>
<button type=\"submit\" class=\"btn inf\" name=\"submit7\" style=\"margin-left: -0%;background-color: #1a7271;color:white\">AJOUTER</button>
    </div>
    </form>
    </div>
    </div><br>
";
echo "</div>            <div class=\"container cadre\" >
  <div class=\" center orga-cadre\" style=\"border: 2px solid #1a7271;\">
    <div class=\"card-body\">
     <h2 class=\"text1\" id=\"ADMIN\" style=\"color: #1a7271;\">MODIFIER UN THEME</h2>
            <form action=\"req.php\" method=\"POST\" >
                <div class=\"text-center\">
    </div>";
      $d=count($contact4);
     for($i=0;$i<$d;$i++){
         $id6=$contact4[$i]['id'];
         $title=$contact4[$i]['nom'];
echo "
<div class=\"form-check\">
  <input class=\"form-check-input\" type=\"radio\" name=\"titre\" id=\"exampleRadios2\" value=\"$id6\">
  <label class=\"form-check-label\" for=\"exampleRadios2\">
    $title
  </label>
</div><br>";
     }
    echo"    
             <div class=\"form-group\">
<input type=\"text\" class=\"form-control\" id=\"text \" placeholder=\"nom\" name=\"titre1\">
                    </div>        
                    <div class=\"form-group\">
<input type=\"text\" class=\"form-control\" id=\"text \" placeholder=\"mot de passe\" name=\"titre2\">
                    </div>
<button type=\"submit\" class=\"btn \" name=\"submit8\" style=\"margin-left:-0%;background-color: #1a7271;color:white\">MODIFIER</button>
                </div>
            </form>
    </div>
  </div><br>
</div>";}
    
    
    }
     
  
?>    <br><br><br><script src="biblio/custom.js"></script>
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