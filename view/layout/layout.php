<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Childgard</title>
    <link href='../../../../fullcalendar/packages/core/main.css' rel='stylesheet' type="text/css"/>
    <link href='../../../../fullcalendar/packages/daygrid/main.css' rel='stylesheet' type="text/css"/>
    <link href='../../../../fullcalendar/packages/timegrid/main.css' rel='stylesheet' type="text/css"/>
    <script type="module" src="../../../../fullcalendar/packages/core/main.js"></script>
    <script type="module" src="../../../../fullcalendar/packages/daygrid/main.js"></script>
    <script type="module" src="../../../../fullcalendar/packages/interaction/main.js"></script>
    <script type="module" src="../../../../fullcalendar/packages/timegrid/main.js"></script>

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
                <li><a href="#" class="lienf home">Accueil</a></li>
                <li><a href="#" class="lienf contact">Contact</a></li>
                <li><a href="#" class="lienf conditions">CGU</a></li>
                <li><a href="#" class="lienf mentions">Mentions Légales</a></li>
            </ul>
        </nav>
    </footer>


    <script src="<?= $view->asset('js/main.js'); ?>"></script>
</body>
</html>
