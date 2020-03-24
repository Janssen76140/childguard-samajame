<?php


use App\Service\Form;

?>

<h1> Connexion </h1>
<form action="" method="post">
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
