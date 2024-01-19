<?php
$bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
$res = $bdd->prepare('SELECT * FROM client WHERE email=:email AND Mdp=:Mdp');
$res->execute(array(
    'email' => $_POST['email'],
    'Mdp' => $_POST['mdp']
));

$inscription = $res->fetchAll();

if ($inscription) {
    echo "Cette Email et ce mot de passe existent déjà";
    ?>
    <form method="post" action="Inscription.html">
        <input type="submit" value="Retour">
    </form>
    <?php
} else {
    $req = $bdd->prepare('INSERT INTO client(nom, prenom, email, rue, cp, Ville, Ntelephone, Mdp, Admine) VALUES(:nom, :prenom, :email, :rue, :cp, :Ville, :Ntelephone, :Mdp, :Admine)');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'rue' => $_POST['rue'],
        'cp' => $_POST['cp'],
        'Ville' => $_POST['ville'],
        'Ntelephone' => $_POST['telephone'],
        'Mdp' => $_POST['mdp'],
        'Admine' => false
    ));
    ?>
    <body>
    Vous êtes connectés:
    <form action="Siteweb_Client.php" method="post">
        <input type="submit" value="Retour vers la page d'accueil">
    </form>
    </body>
    <?php
}
?>

