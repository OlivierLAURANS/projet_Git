<?php
$id_identification = $_GET['id_identification'];
$pdo = new PDO('mysql:host=localhost;dbname=abonne', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));

$result = $pdo -> query("SELECT nom, prenom FROM identification WHERE id_identification = '$id_identification'");
$tabResult = $result -> fetch();
$nom = $tabResult['nom'];
$prenom = $tabResult['prenom'];



if(isset($_POST['titre'])){
  
      $titre = $_POST['titre'];
      $art = $_POST['art'];
     
    $pdo ->query("INSERT INTO article (titre,art,date_parution,id_identification ) VALUES ('$titre','$art',CURDATE(),'$id_identification')");

}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
   
</head>
<body>
<!-- j'affiche mes 2 variables $nom $prenom récupérées plus haut --> 
<h1><?php echo "bonjour $nom $prenom"; ?></h1>
<h2>Rédigez votre article :</h2>
<form method="POST" action="article.php" > 
    
    <input type="text" name ="titre" placeholder = "titre" >

    <textarea name="art"> </textarea>
     <input type="submit">

     </form>
   

</body>
</html>



