<?php


use App\Service\Form;


?>
<link href="https://fonts.googleapis.com/css?family=Bellota:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">

<h1 class="inscriptionTitre"> Inscription </h1>

<div class="barre"></div>

<form class="formInscr" action="" method="post">
    <?php
    echo $form->label('nom', 'Nom');
    echo $form->input('nom', 'text');
    echo $form->error('nom');

    echo $form->label('prenom', 'Prenom');
    echo $form->input('prenom', 'text');
    echo $form->error('prenom');

    echo $form->label('email', 'Email');
    echo $form->input('email', 'email');
    echo $form->error('email');

    echo $form->label('Mot de passe', 'mdp');
    echo $form->input('mdp', 'password');
    echo $form->error('mdp');

    echo $form->label('adresse', 'Adresse');
    echo $form->input('adresse', 'text');
    echo $form->error('adresse');

    echo $form->label('ville', 'Ville');
    echo $form->input('ville', 'text');
    echo $form->error('ville');

    echo $form->label('téléphone', 'téléphone');
    echo $form->input('téléphone', 'tel');

    echo $form->submit();

    ?>
</form>