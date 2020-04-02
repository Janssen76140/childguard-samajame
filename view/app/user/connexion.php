<?php


use App\Service\Form;

?>
<link href="https://fonts.googleapis.com/css?family=Bellota:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">

<h1 class="connexionTitre">Connexion</h1>

<div class="barre"></div>

<form class="formCo" action="" method="post">
    <?php


    echo $form->label('email', 'email');
    echo $form->input('email', 'email');
    echo $form->error('email');

    echo $form->label('Mot de passe', 'mdp');
    echo $form->input('mdp', 'password');
    echo $form->error('mdp');

    echo $form->submit();
    ?>
</form>
