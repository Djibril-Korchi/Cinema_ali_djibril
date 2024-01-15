<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
<<<<<<< HEAD
}
catch (Exception $e) {
=======
} catch (Exception $e) {
>>>>>>> eba3356196ff60580c1b94f8bb0708f0f299f89d
    die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM client WHERE email = :email AND Mdp = :Mdp');
$req->execute(array(
    'email' => $_POST['email'],
    'Mdp' => $_POST['mdp']
));

if ($req->rowCount() > 0) {
    $statue = $bdd->prepare("SELECT Admine FROM client WHERE email = :mail AND Mdp = :mdp");
    $statue->execute(array(
        'mail' => $_POST['email'],
        'mdp' => $_POST['mdp']
    ));

    $Admin = $statue->fetch(); // Use $statue instead of $req here

    if ($Admin['Admine']) {
        header("Location: Siteweb_Admin.php");
    } else {
        header("Location: Siteweb_Client.php");
    }
} else {
    echo "Votre mot de passe est incorrect";
}

$res = $req->fetchAll();
?>
<br>
<a href="Connection.html"><button>Connection</button></a>
