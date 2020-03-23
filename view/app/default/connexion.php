<?php


use App\Service\Form;

?>

    <h1> Connexion </h1>

<?php

$form = new Form();

echo $form->label('email','Email');
echo $form->input('email','email');
echo $form->label('Mot de passe','mdp');
echo $form->input('mdp','password');


echo $form->submit();

