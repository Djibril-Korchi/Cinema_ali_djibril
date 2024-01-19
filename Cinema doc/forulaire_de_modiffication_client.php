<form method="post" action="Modifier_client.php">
    <table>
        <?php
        $id = $_POST['Modifier'];
        $bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
        $reponse = $bdd->prepare('SELECT * FROM client WHERE id_client = :id');
        $reponse->execute(array(
            'id' => $id
        ));
        $donne = $reponse->fetchAll();

        foreach ($donne as $element) {
            echo "
                <tr><td>Votre ID :</td><td><input type='text' name='id_client' value=" . $element['id_client'] . " readonly></td></tr>
                <tr><td>Votre Nom :</td><td><input type='text' name='nom' value=" . $element['nom'] ."></td></tr>
                <tr><td>Votre Prenom :</td><td><input type='text' name='prenom' value=" . $element['prenom'] . "></td></tr>
                <tr><td>Votre email</td><td><input type='email' name='email' value=" . $element['email'] . "></td></tr>
                <tr><td>Votre rue</td><td><input type='text' name='rue' value=" . $element['rue'] . "></td></tr>
                <tr><td>Votre code postalle</td><td><input type='text' name='cp' value=" . $element['cp'] . "></td></tr>
                <tr><td>Votre ville</td><td><input type='text' name='ville' value=" . $element['Ville'] . "></td></tr>
                <tr><td>Votre Numéro de Téléphone</td><td><input type='text' name='NT' value=" . $element['Ntelephone'] . "></td></tr>
                <tr><td>Votre Mot de Passe</td><td><input type='text' name='mdp' value=" . $element['Mdp'] . "></td></tr>
                <tr><td><input type='submit' value='Valider'></td></tr>
            ";
        }
        ?>
    </table>
</form>

