<?php

$bdd=new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
$modif=$bdd->prepare("Update client SET nom=:n and prenom=:p and email=:e and rue=:r and cp=:c Ville=:v Ntelephone=:N and Mdp=:m WHERE id_client = :id_client");

$modif->execute(array(
    'id_client'=>$_POST['id_client'],
    'n'=>$_POST['nom'],
    'p'=>$_POST['prenom'],
    'e'=>$_POST['email'],
    'r'=>$_POST['rue'],
    'c'=>$_POST['cp'],
    'v'=>$_POST['ville'],
    'N'=>$_POST['NT'],
    'm'=>$_POST['mdp']
));
header("Location: Modifier.php");
