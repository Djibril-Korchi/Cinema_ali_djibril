<!DOCTYPE html>
<!-- saved from url=(0080)https://www.templateonweb.com/upload/aedemodir/9872ed9fc22fc182d371c3e9ed316094/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex,nofollow">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <link href="./bootstrap.min.css" rel="stylesheet">
    <link href="./global.css" rel="stylesheet">
    <link href="./index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./font-awesome.min.css">
    <link href="./css" rel="stylesheet">
    <link href="./css(1)" rel="stylesheet">
    <script src="./jquery-2.1.1.min.js.téléchargement"></script>
    <script src="./bootstrap.min.js.téléchargement"></script>
</head>

<body>

<section id="top">
    <div class="container">
        <div class="row">
            <div class="top_main clearfix">
                <div class="top_1 text-right clearfix">
                </div>
                <div class="top_2 clearfix">
                    <div class="col-sm-3">
                        <div class="top_2_left">
                            <h1><a href="Siteweb_Admin.php">CINEMA ZONE <span>BOOKING</span></a></h1>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="top_2_right text-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="header" class="clearfix cd-secondary-nav">
    <div class="container">
        <div class="row">
            <div class="header_main clearfix">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="Siteweb_Admin.php">CINEMA ZONE <span>BOOKING</span></a>
                    </div>


                    <div class="collapse navbar-collapse js-navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="font_tag active_tag" href="Suprimer.php">Suprimer</a></li>
                            <li><a class="font_tag active_tag" href="formullairecreationsalle.php">Création de salle</a></li>
                            <li><a class="font_tag active_tag" href="AjtFilm.html">Nouveau Film</a></li>
                            <li><a class="font_tag active_tag" href="grade.php">Ajouter de nouveau Admin</a></li>
                            <li><a class="font_tag active_tag" href="SiteWeb.php">Déconnection</a></li>
                        </ul>

                    </div><!-- /.nav-collapse -->
                </nav>
            </div>
        </div>
    </div>
</section>

<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$req = $bdd->prepare('SELECT * FROM client WHERE Admine = :a');
$req->execute(array(
        'a'=>false
));
$grade = $req->fetchAll();
?>
<form action="admin.php" method="post">
    <table width="100%">
        <tr>
            <td>
                Sélectionné l'id du user que vous voulez faire
            </td>
            <td>
                <select name="id">
                    <?php
                    foreach ($grade as $element){
                        echo"<br>
<option name=".$element['id_client'].">".$element['id_client']."</option>";
                    }

                    ?>

                </select>
            </td>
            <td><input type='submit' value='Passer Admin'></td>
        </tr>
        <tr>

            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>rue</th>
            <th>Code Postal</th>
            <th>Ville</th>
            <th>Numéro de téléphone</th>

        </tr>
        <?php
        foreach ($grade as $element){
           echo "<tr>
            <td>".$element['nom']."</td>
            <td>".$element['prenom']."</td>
            <td>".$element['email']."</td>
            <td>".$element['rue']."</td>
            <td>".$element['cp']."</td>
            <td>".$element['Ville']."</td>
            <td>".$element['Ntelephone']."</td>
           
            
            </tr>";
        }
        ?>

    </table>
</form>
</body>
</html>
