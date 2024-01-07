<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Création de Salle</title>
</head>
<body>
<form action="CreationSalle.php" method="post">
    Type de Salle:<select>
        <option name="Classique">Salle Classique</option>
        <option name="Prenium">Salle prenium</option>
        <option name="3d">Salle 3d</option>
        <option name="4d">sALLE 4d</option>
    </select>
    <br>
   Nombre de Place: <input type="text" name="nombreplace">
<br>
        <?php try {
            $bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
        }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $reponse = $bdd->query('SELECT * FROM film');
        $donne = $reponse->fetchAll();
        ?>
    Film assossié:<select name="Film">
        <?php
        foreach ($donne as $element){
            ?> <option name="Film"><?= $element['Titre'] ?></option><?php
        }

        ?>
    </select>
    <br>
    <input type="submit" value="Création de salle">
</form>
</body>
</html>