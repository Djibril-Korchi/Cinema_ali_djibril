<?php

$bdd=new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
$modif=$bdd->prepare("Update client SET Typesalle=:t and NombrePlace=:n and ref_film=:r WHERE id_salle = :id_salle");

$modif->execute(array(
    'id_salle'=>$_POST['id_salle'],
    't'=>$_POST['typesalle'],
    'n'=>$_POST['NombrePlace'],
    'r'=>$_POST['ref_film']
));
header("Location: Modifier.php");
