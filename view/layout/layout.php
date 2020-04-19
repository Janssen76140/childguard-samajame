<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Childguard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css' rel='stylesheet' type="text/css"/>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css' rel='stylesheet' type="text/css"/>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.css' rel='stylesheet' type="text/css"/>

    <link href='https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.js'></script>


    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.css" type="text/css"/>


    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.js"></script>
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.js"></script>
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/interaction/main.min.js"></script>
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bellota:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">
</head>
<body>




<header>
    <div class="divLogo">
        <a href="<?= $view->path('home'); ?>"><img class="logo" src="<?= $view->asset('img/logosamajame_rd_contour.svg'); ?>" alt="Logo
        ChildGuard"/></a>
    </div>

    <div class="lienEspacePro">
        <a href="">Espace Pro</a>
    </div>

    <?php if (empty($prenom)) { ?>
        <nav id="nav" class="nav">
            <ul>
                <li><a href="<?= $view->path('connexion'); ?>" class="connect">Connexion</a></li>
                <li><a href="<?= $view->path('inscription'); ?>" class="inscr">S'inscrire</a></li>
            </ul>
        </nav>
    <?php } else { ?>

        <nav>
            <ul>
                <li><a href="<?= $view->path('mesEnfants' array($prenom)) ?>" class="enfantsHeader">Mes enfants</a></li>
                <li><a href="<?= $view->path('carteUser', array($prenom)); ?>" class="proHeader">Trouver son
                        professionnel</a></li>
                <li><a href="<?= $view->path('deconnexion') ?>" class="decoHeader">Déconnexion</a></li>
            </ul>
        </nav>
    <?php } ?>


    <div class="mobile-container">
        <div class="topnav">
            <div id="myLinks">

                <?php if (empty($prenom)) {?>

                    <a href="<?= $view->path('home'); ?>" class="lienBurger">Accueil</a>
                    <a href="<?= $view->path('contact') ?>" class="lienBurger">Contact</a>
                    <a href="<?= $view->path('connexion'); ?>" class="lienBurger">Connexion</a>
                    <a href="<?= $view->path('inscription'); ?>" class="lienBurger
                                    dernierLienBurger">S'inscrire</a>



                <?php } else { ?>

                    <a href="<?= $view->path('mesEnfants' array($prenom)) ?>" class="lienBurger">Mes enfants</a>
                    <a href="<?= $view->path('carteUser', array($prenom)); ?>" class="lienBurger">Trouver son
                        professionnel</a>
                    <a href="<?= $view->path('deconnexion') ?>" class="lienBurger dernierLienBurger">Déconnexion</a>

                <?php } ?>

            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
</header>





<div class="container">
    <?= $content; ?>
</div>
  
    <link href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style1.css">

    <footer>
        <nav class="navbarFooter">
            <ul>
                <div class="footerGauche">
                    <div class="quart">
                        <div class="quart1">
                            <li><a href="<?= $view->path('home'); ?>" class="lienf home">Accueil</a></li>
                        </div>
                    </div>

                    <div class="quart">
                        <div class="quart2">
                            <li><a href="<?= $view->path('contact'); ?>" class="lienf contact">Contact</a></li>
                        </div>
                    </div>
                </div>
                <div class="footerDroite">

                    <div class="quart">
                        <div class="quart3">
                            <li><a href="<?= $view->path('cgu'); ?>" class="lienf conditions">CGU</a></li>
                        </div>
                    </div>

                    <div class="quart">
                        <div class="quart4">
                            <li><a href="<?= $view->path('mentions_legales'); ?>" class="lienf mentions">Mentions Légales</a></li>
                        </div>
                    </div>
                </div>
            </ul>
        </nav>
    </footer>


    <script src="<?= $view->asset('js/main.js'); ?>"></script>
</body>
</html>
