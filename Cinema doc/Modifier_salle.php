<?php
$id=$_POST['suprimer'];
$bdd=new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
$modif=$bdd->prepare("DELETE FROM sallecinema WHERE id_salle = :id_film");

$modif->execute(array(
    'id_film'=>$id
));
header("Location: Modifier.php");