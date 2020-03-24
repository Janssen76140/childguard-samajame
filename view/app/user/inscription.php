<?php


use App\Service\Form;


?>

<h1> Inscription </h1>



<form action="" method="post">
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
