<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
}
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
}



$req = $bdd->prepare('INSERT INTO film (Titre, Temps, Auteur, synopsie,Affiche) VALUES(:Titre, :Temps, :Auteur, :synopsie,:Affiche)');
$req->execute(array(
    'Titre' => $_POST['Titre'],
    'Temps'=>$_POST['Temps'],
    'Auteur'=>$_POST['Auteur'],
    'synopsie'=>$_POST['Synopsie'],
    'Affiche'=>$_POST['Affiche']
));