<?php
/*
$mysqli = new Mysqli('localhost','root','','entreprise');l
$resultat = $mysqli -> query("SELECT* FROM employes limit 0,1");
$employes = $resultat -> fetch_assoc();
print_r($employes);
echo "prenom :".$employes["prenom"];

$mysqli -> query("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('olivier', 'laurans', 'm', 'informatique', '2019-12-20', 1800)
");
*/
$pdo = new PDO('mysql:host=localhost;dbname=abonne', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));
/*
$resultat=$pdo -> query("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('geoges', 'laurans', 'm', 'informatique', '2019-12-20', 1800)
");
var_dump($resultat);
$resultat =$pdo ->query("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Philippe', 'poidvin', 'm', 'comptabilite', '2019-03-20', 3800)
");                                                      
*/
if(isset($_POST['nom'])){
  
    print_r($_POST);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "nom : ".$nom."prenom:".$prenom;
    $pdo ->query("INSERT INTO identification (nom,prenom,mail,password) VALUES  ('$nom','$prenom','$email','$password')");
    header('Location: liste.php');
    exit;
}



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<form method="post" action="inscription.php" > 
    <input type="text" name ="nom" placeholder ="nom" >
    <input type="text" name ="prenom" placeholder = "prenom" >
    <input type="text" name ="email" placeholder = "email" >
    <input type="text" name ="password" placeholder = "password" >
     <button type="submit">envoyer</button>

     </form>
   

</body>
</html>





