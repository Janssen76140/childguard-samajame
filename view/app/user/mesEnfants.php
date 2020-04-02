<?php
use App\Service\Form;


?>

<h1> Bonjour <?php echo $prenom ?>, Inscription de votre enfant</h1>



<form action="" method="post">
    <?php

    echo $form->label('Nom :', 'nom');
    echo $form->input('nom', 'text');
    echo $form->error('nom');

    echo $form->label('Prénom :', 'prenom');
    echo $form->input('prenom', 'text');
    echo $form->error('prenom');

    echo $form->label('Responsable légal :', 'responsableLegal');
    echo $form->input('responsableLegal', 'text');
    echo $form->error('responsableLegal');

    echo $form->label('Date de naissance :', 'dateNaissance');
    echo $form->input('dateNaissance', 'text');
    echo $form->error('dateNaissance');


    echo $form->label('Allergies :', 'allergie');
    echo $form->textarea('allergie');
    echo $form->error('allergie');


    echo $form->label('Vaccins :', 'vaccins');
    echo $form->textarea('vaccins');
    echo $form->error('vaccins');

    echo $form->label('Maladies :', 'maladie');
    echo $form->textarea('maladie');
    echo $form->error('maladie');


    echo $form->label('Régime alimentaire :', 'regimeAlimentaire');
    echo $form->textarea('regimeAlimentaire');
    echo $form->error('regimeAlimentaire');

    echo $form->submit();

    ?>

</form>