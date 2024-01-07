<?php
try

{

    $bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');

}

catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());

}
$film=$_POST['Film'];
echo $film;
$req = $bdd->prepare('SELECT * FROM film WHERE Titre=?');
$req->execute(array(
    'Titre'=>$film
));
$initialisationID= $req->fetchAll();
echo $initialisationID['id_salle'];