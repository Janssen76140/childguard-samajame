<?php


use App\Service\Form;

?>

<h1> Inscription </h1>

<?php

$form = new Form();
echo $form->label('nom','Nom');
echo $form->input('nom','text');
echo $form->label('prenom','Prenom');
echo $form->input('prenom','text');
echo $form->label('email','Email');
echo $form->input('email','email');
echo $form->label('Mot de passe','mdp');
echo $form->input('mdp','password');
echo $form->label('adresse','Adresse');
echo $form->input('adresse','text');
echo $form->label('ville','Ville');
echo $form->input('ville','text');
echo $form->label('téléphone','téléphone');
echo $form->input('téléphone','tel');

echo $form->submit();

