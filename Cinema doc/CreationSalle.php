<?php
try

{

    $bdd = new PDO('mysql:host=localhost;dbname=data;charset=utf8', 'root', '');

}

catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());

}
$req = $bdd->prepare('SELECT id_salle FROM film WHERE Titre');




