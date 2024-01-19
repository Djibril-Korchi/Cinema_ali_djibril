<?php

$bdd=new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
$modif=$bdd->prepare("Update client SET Titre=:t and Temps=:T and Auteur=:a and synopsie=:s WHERE id_film = :id_film");

$modif->execute(array(
    'id_film'=>$_POST['id_film'],
    't'=>$_POST['titre'],
    'T'=>$_POST['temps'],
    'a'=>$_POST['Auteur'],
    's'=>$_POST['synopsie']
));
header("Location: Modifier.php");
