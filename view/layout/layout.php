<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Childgard</title>
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
    <link href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bellota:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">
</head>
<body>


<header>

    <a href="#"><img class="logo" src="asset/img/logosamajame_rd_contour.svg" alt="Logo ChildGuard"/></a>
    <?php


    if (empty($prenom)) { ?>
                        <nav class="navbarHeader">
                            <ul>
                                <li><a href="<?= $view->path('connexion'); ?>"
                                       class="lien connexionHeader">Connexion</a></li>
                                <li><a href="<?= $view->path('inscription'); ?>" class="lien inscriptionHeader">S'inscrire</a>
                                </li>
                            </ul>
                        </nav>
                        <?php

    } else { ?>
        <nav>
            <ul>
                <li><a href="<?= $view->path('home'); ?>">Home</a></li>
                <li><a href="<?= $view->path('addEnfant'); ?>">Mes Enfants</a></li>

                <li><a href="<?= $view->path('calendrier'); ?>"> Reserver</a></li>
                <li><a href="<?= $view->path('carteUser', array($prenom)); ?>">Trouver son professionnels</a></li>
                <li><a href="<?= $view->path('listingPro', array($prenom)); ?>">Liste des professionnels</a></li>
                <li><a href="<?= $view->path('deconnexion'); ?>">Déconnexion</a></li>
            </ul>
        </nav>
    <?php } ?>


</header>

<div class="container">
    <?= $content; ?>
</div>

<footer>
  
    <link href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style1.css">

    <footer>
        <nav class="navbarFooter">
            <ul>
                <li><a href="<?= $view->path('home'); ?>" class="lienf home">Accueil</a></li>
                <li><a href="<?= $view->path('contact'); ?>" class="lienf contact">Contact</a></li>
                <li><a href="<?= $view->path('cgu'); ?>" class="lienf conditions">CGU</a></li>
                <li><a href="<?= $view->path('mentions_legales'); ?>" class="lienf mentions">Mentions Légales</a></li>
            </ul>
        </nav>
    </footer>


    <script src="<?= $view->asset('js/main.js'); ?>"></script>
</body>
</html>
