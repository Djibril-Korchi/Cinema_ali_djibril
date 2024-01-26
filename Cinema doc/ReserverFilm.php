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
    <style>

        .text-input {
            border: none;
            border-radius: 10px;
            padding: 8px;
            outline: none;
        }
    </style>
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
                            <h1><a href="Siteweb_Client.php.php">CINEMA ZONE <span>BOOKING</span></a></h1>
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
                        <a class="navbar-brand" href="Siteweb_Client.php">CINEMA ZONE <span>BOOKING</span></a>
                    </div>


                    <div class="collapse navbar-collapse js-navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="font_tag active_tag" href="Rechercher.html">Rechercher</a></li>
                            <li><a class="font_tag active_tag" href="SiteWeb.php">Déconnection</a></li>
                        </ul>

                    </div><!-- /.nav-collapse -->
                </nav>
            </div>
        </div>
    </div>
</section>
<?php
    include "ReserverClass.php";
    $reserver=new ReserverClass();

    $bdd=new PDO('mysql:host=localhost;dbname=dki_cinema; charset=utf8', 'root', '');
    $affiche=$bdd->prepare("SELECT * FROM film WHERE film=:film");
    $affiche->execute(array(
        'film'=>$reserver->getfilm()
    ));
    $affiche->fetchAll();
    foreach ($affiche as $el){
        ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Description</h2>
            <?php
            echo "<h2>".$el['Titre']."</h2>
            <br>
            <h2>Synopsies</h2>
            <p>".$el['synopsie']."</p>
            <br>
            <p>Auteur: ".$el['Auteur']."
            <br>
            Temps: ".$el['Temps']."
            </p>";
            ?>
            <form >
                <input type="number" name="nbplace">
            </form>
        </div>
        <div class="col-4">
            <?php
            echo "<a><img src=".$el['Affiche']."></a>";
            ?>
        </div>
    </div>
</div>
<form action="payment.php" method="post">
    <table>
        <tr>
            <td>Nombre de place a reservés:</td>
            <td><input type="number" name="nbplace"></td>
        </tr>
        <tr>
            <td>Type de salle:</td>
            <td><select name="type">
                    <option name="Classique">Salle Classique</option>
                    <option name="Prenium">Salle prenium</option>
                    <option name="3d">Salle 3d</option>
                    <option name="4d">sALLE 4d</option>
                </select></td>
        </tr>
        <tr>
            <td>Votre numéro de carte</td>
            <td><input type="text" name="carte"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Payment"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
}
