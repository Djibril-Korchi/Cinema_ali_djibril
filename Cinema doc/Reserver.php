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
                            <li><a class="font_tag active_tag" href="Suprimer.php">Supprimer</a></li>
                            <li><a class="font_tag active_tag" href="formullairecreationsalle.php">Création de salle</a></li>
                            <li><a class="font_tag active_tag" href="AjtFilm.html">Nouveau Film</a></li>
                            <li><a class="font_tag active_tag" href="grade.php">Ajouter de nouveau Admin</a></li>
                            <li><a class="font_tag active_tag" href="SiteWeb.php">Déconnexion</a></li>
                        </ul>

                    </div><!-- /.nav-collapse -->
                </nav>
            </div>
        </div>
    </div>
</section>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
$salle = $bdd->query('SELECT * FROM sallecinema');

$supSalle = $salle->fetchAll();
?>
<table>
    <tr>
        <form method="post" action="Suprimer_salle.php">
            <td> Suprimer une salle</td>
            <td>

                <select name="suprimer">
                    <option name="titre" readonly>id  Type de salle  Nombre de Place</option>
                    <?php
                    foreach ($supSalle as $element){
                        echo  "<option name=".$element['id_salle'].">"."   ".$element['id_salle']."   ".$element['TypeSalle']."   ".$element['Nombre Place']."</option>";
                    }
                    ?>
                </select>
            </td>
            <td>
                <input type="submit" value="Suprimer La salle">
            </td>
        </form>
    </tr>
</table>
</body>
</html>
