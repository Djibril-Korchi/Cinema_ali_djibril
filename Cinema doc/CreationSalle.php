<?php
$bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
$recherche= $bdd->prepare("SELECT id_film FROM film WHERE Titre=:t");
$recherche->execute(array(
    't'=>$_POST['Film']
));
$rech=$recherche->fetch();
$req = $bdd->prepare('INSERT INTO sallecinema(TypeSalle,NombrePlace,ref_film )VALUES (:t,:n,:r)');
$req->execute(array(
    't'=>$_POST['type'],
    'n'=>$_POST['nombreplace'],
    'r'=>$rech['id_film']
));
header("Location: formullairecreationsalle.php");
