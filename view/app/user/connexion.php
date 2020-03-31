<?php


use App\Service\Form;

?>

<h1 class="connexionTitre">Connexion</h1>

<div class="barre"></div>

<form class="formCo" action="" method="post">
    <?php


    echo $form->label('email', 'Email');
    echo $form->input('email', 'email');
    echo $form->error('email');

    echo $form->label('Mot de passe', 'mdp');
    echo $form->input('mdp', 'password');
    echo $form->error('mdp');

    echo $form->submit();
    ?>
</form>