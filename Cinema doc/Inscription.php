<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
}
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
}



$req = $bdd->prepare('INSERT INTO client(nom, prenom,email,rue,cp,Ville,Ntelephone,Mdp,Admine) VALUES(:nom, :prenom,:email,:rue,:cp,:Ville,:Ntelephone,:Mdp, :Admine)');
$req->execute(array(
    'nom' => $_POST['nom'],
    'prenom'=> $_POST['prenom'],
    'email'=>$_POST['email'],
    'rue'=>$_POST['rue'],
    'cp'=>$_POST['cp'],
    'Ville'=>$_POST['ville'],
    'Ntelephone'=>$_POST['telephone'],
    'Mdp'=>$_POST['mdp'],
    'Admine'=>true
));
?>
<body>
Vous êtes connectés:
<form action="Siteweb.html" method="post">
    <input type="submit" value="Retour vers la page d'acceuil">
</form>
</body>
