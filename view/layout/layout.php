<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Childgard</title>
      <link href='../fullcalendar/packages/core/main.css' rel='stylesheet' type="text/css" />
      <link href='../fullcalendar/packages/daygrid/main.css' rel='stylesheet' type="text/css" />
      <script type="module" src="../fullcalendar/packages/core/main.js"></script>
      <script type="module" src="../fullcalendar/packages/daygrid/main.js"></script>

    <link rel="stylesheet" type="text/css" href="<?= $view->asset('css/style.css'); ?>">
  </head>
  <body>


    <header>
      <nav>
          <ul>
              <li><a href="<?= $view->path('home'); ?>">Home</a></li>
              <li><a href="<?= $view->path('contact'); ?>">Contact</a></li>
              <li><a href="<?= $view->path('single',array(12)); ?>">Single</a></li>
              <li><a href="<?= $view->path('single2',array(12,'dedede')); ?>">Single2</a></li>
              <li><a href="<?= $view->path('articles'); ?>">Mes articles</a></li>
              <li><a href="<?= $view->path('inscription'); ?>">Inscription</a> </li>
              <li><a href="<?= $view->path('connexion'); ?>">Connexion</a> </li>
              <li><a href="<?= $view->path('calendrier'); ?>"> Reserver</a> </li>

          </ul>
      </nav>
    </header>

    <div class="container">
        <?= $content; ?>
    </div>

    <footer>

    </footer>

    <script src="<?= $view->asset('js/main.js'); ?>"></script>
  </body>
</html>
