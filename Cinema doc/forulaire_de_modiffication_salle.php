<form method="post" action="Modifier.php">
    <table>
        <?php
        $id = $_POST['modif'];
        $bdd = new PDO('mysql:host=localhost;dbname=dki_crudphp;charset=utf8', 'root', '');
        $reponse = $bdd->prepare('SELECT s.*,f.Titre FROM sallecinema as s INNER JOIN film as f ON s.ref_film = f.id_film WHERE s.id_salle = :id');
        $reponse->execute(array(
            'id' => $id
        ));
        $donne = $reponse->fetchAll();

        foreach ($donne as $element) {
            echo "
                <tr><td>L'id de la salle :</td><td><input type='text' name='id_salle' value=" . $element['id_salle'] . " readonly></td></tr>
                <tr><td>Le Type de la salle :</td><td><input type='text' name='typesalle' value=" . $element['TypeSalle'] . "></td></tr>
                <tr><td>Le Nombre de Place de la salle :</td><td><input type='text' name='nbplace' value=" . $element['NombrePlace'] . "></td></tr>
                <tr><td>Le Film diffusé dans la salle :</td><td><input type='text' name='ref_film' value=" . $element['ref_film']." ".$element['Titre'] . "></td></tr>
                <tr><td><input type='submit' value='Valider'></td></tr>
            ";
        }
        ?>
    </table>
</form>

