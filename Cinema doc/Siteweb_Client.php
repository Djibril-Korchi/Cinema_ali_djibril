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
<<<<<<< HEAD
    <script src="./bootstrap.min.js.téléchargement"></script>
    <style>

        .text-input {
            border: none;
            border-radius: 10px;
            padding: 8px;
            outline: none;
        }
    </style>
=======
>>>>>>> f552fa89743beac70d3d94b21c2b760a18e27853
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
                            <li><a class="font_tag active_tag" href="SiteWeb.php">Déconnexion</a></li>
                        </ul>

                    </div><!-- /.nav-collapse -->
                </nav>
            </div>
        </div>
    </div>
</section>
<section id="booking">
    <div class="container">
        <div class="row">
            <div class="booking clearfix">
                <div class="col-sm-10">
                    <div class="booking_left_main clearfix">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="https://www.templateonweb.com/upload/aedemodir/9872ed9fc22fc182d371c3e9ed316094/#home">TRENDING</a></li>
                            <li><a data-toggle="tab" href="https://www.templateonweb.com/upload/aedemodir/9872ed9fc22fc182d371c3e9ed316094/#menu1">POPULAR</a></li>


                            <div class="tab-content clearfix">
                                <div id="home" class="tab-pane fade in active clearfix">
                                    <div class="click clearfix">
                                        <div class="click_1 clearfix">
                                            <?php
                                            try {
                                                $bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
                                            }
                                            catch (Exception $e) {
                                                die('Erreur : ' . $e->getMessage());
                                            }
                                            $affichage = $bdd->query('SELECT Affiche,Titre FROM film');
                                            $affiche = $affichage->fetchAll();
                                            foreach ($affiche as $element){
                                                $URL=$element['Affiche'];
                                                echo "</div>
                                        <form method='post' action='Reserver.php'>
                                        <div class='click_2 clearfix'>
                                            <div class='col-sm-3'>
                                                <div class='click_2_inner clearfix'>
                                                <input type='image' src=".$element['Affiche']." src='Reserver.php' width='100%' height='220px' name='film'>
                                                    <p class='text-center'><input value='". $element['Titre']."' class='text-input' type='text'></p>                                         
                                                    <p class='text-center'>Salle Classique</p>                                                  
                                                </div>
                                            </div>
                                            <div class='col-sm-3'>
                                                <div class='click_2_inner clearfix'>
                                                    <input type='image' src=".$element['Affiche']." src='Reserver.php' width='100%' height='220px' name='film'>
                                                    <p class='text-center'><input value='". $element['Titre']."' class='text-input' type='text'></p>                                         
                                                    <p class='text-center'>Salle Prenium</p>
                                                </div>
                                            </div>
                                            <div class='col-sm-3'>
                                                <div class='click_2_inner clearfix'>
                                                    <input type='image' src=".$element['Affiche']." src='Reserver.php' width='100%' height='220px' name='film'>
                                                    <p class='text-center'><input value='". $element['Titre']."' class='text-input' type='text'></p>                                         
                                                    <p class='text-center'>Salle 3D</p>
                                                </div>
                                            </div>
                                            <div class='col-sm-3'>
                                                <div class='click_2_inner clearfix'>                                                <div class='click_2_inner clearfix'>
                                                    <input type='image' src=".$element['Affiche']." src='Reserver.php' width='100%' height='220px' name='film'>
                                                    <p class='text-center'><input value='". $element['Titre']."' class='text-input' type='text'></p>                                         
                                                    <p class='text-center'>Salle 4D</p>
                                                </div>
                                            </div>
                                            </form>
                                        </div>";

                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
</section>
<section id="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="footer_bottom clearfix">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <div class="footer_bottom_right">
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function(){

                        /*****Fixed Menu******/
                        var secondaryNav = $('.cd-secondary-nav'),
                            secondaryNavTopPosition = secondaryNav.offset().top;
                        $(window).on('scroll', function(){
                            if($(window).scrollTop() > secondaryNavTopPosition ) {
                                secondaryNav.addClass('is-fixed');
                            } else {
                                secondaryNav.removeClass('is-fixed');
                            }
                        });

                    });
                </script>
            </div>
        </div>
    </div>
</section>


</body></html>