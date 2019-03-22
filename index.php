<?php
$pdo = new PDO('mysql:host=localhost;dbname=abonne', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));
if(isset($_POST['login'])){
   
    $login = $_POST['login'];// mail
    $pwd = $_POST['pwd'];

       
    $result =$pdo ->query( "SELECT id_identification FROM identification WHERE mail='$login' AND password ='$pwd' ");
    echo "nombre de resultat : ".$result -> rowcount();
    $xc =$result -> rowcount();
    $utilisateur= $result -> fetch();
    $id_identification = $utilisateur['id_identification'];
    echo $id_identification;
        if ($xc == 1){
        header('Location: article.php?id_identification='.$id_identification);
        exit;
    }




}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document-formulaire</title>
</head>
<body>
    <form method="POST" action="">
    <input type="text" name ="login" placeholder ="entrez votre email" >
    <input type="text" name ="pwd" placeholder = "mot de passe" >
    <button type="submit">envoyer</button>
    
 
 



</body>
</html>
