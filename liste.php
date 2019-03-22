<?php
$pdo = new PDO('mysql:host=localhost;dbname=abonne', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));

$resultat = $pdo ->query("SELECT* FROM identification");
$identification = $resultat -> fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document_2</title>
</head>
<body>
<?php
while($data = $resultat -> fetch(PDO::FETCH_ASSOC) ){
    echo "nom:".$data['nom']."prenom:".$data['prenom']."email:".$data['mail']."password:".$data['password'];
    echo "<br>";
}





?>
</body>
</html>