<form method="post" action="Modifier.php">
    <table>
        <?php
        $id = $_POST['modif'];
        $bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
        $reponse = $bdd->prepare('SELECT * FROM film WHERE id_film = :id');
        $reponse->execute(array(
            'id' => $id
        ));
        $donne = $reponse->fetchAll();
        foreach ($donne as $element) {
            echo "
                <tr><td>Votre ID :</td><td><input type='text' name='id_film' value=" . $element['id_film'] . " readonly></td></tr>
                <tr><td>Votre Nom :</td><td><input type='text' name='titre' value=" . $element['Titre'] . "></td></tr>
                <tr><td>Votre Prenom :</td><td><input type='text' name='temps' value=" . $element['Temps'] . "></td></tr>
                <tr><td>Votre Date De Naissance :</td><td><input type='text' name='Auteur' value=" . $element['Auteur'] . "></td></tr>
                <tr><td>Votre email</td><td><input type='email' name='synopsie' value=" . $element['synopsie'] . "></td></tr>
                <tr><td>Votre Pays De Résidence</td><td><input type='text' name='Affiche' value=" . $element['Affiche'] . "></td></tr>
                <tr><td><input type='submit' value='Valider'></td></tr>
            ";
        }
        ?>
    </table>
</form>

