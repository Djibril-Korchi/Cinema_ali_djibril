<?php
$id=$_POST['suprimer'];
$bdd=new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
$modif=$bdd->prepare("DELETE FROM client WHERE id_client = :id_film");

$modif->execute(array(
    'id_film'=>$id
));
header("Location: Suprimer.php");
