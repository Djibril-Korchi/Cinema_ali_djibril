<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pdo2;charset=utf8', 'root', '');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$req = $bdd->prepare('SELECT * FROM client WHERE email = :email and Mdp=:Mdp');
$req->execute(array(
    'email' => $_POST['email'],
    'Mdp' => $_POST['mdp']
));
if ($req ->rowCount()>0){
    header("Location:Siteweb.php.html");
} else{
    echo "Votre mot de passe est incorrect";
}

$res = $req->fetchall();
?>
<br>
<a href="Connection.html"><button>Connection</button></a>