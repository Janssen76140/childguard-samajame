<?php ?>



<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Email</th>
        <th>Heure d'ouverture </th>
        <th>Heure de fermeture</th>
        <th>Adresse</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($pros as $pro) { ?>
        <tr>
            <td><?= $pro->nom; ?></td>
            <td><?= $pro->prix; ?> €/heure</td>
            <td><?= $pro->email; ?></td>
            <td><?= $pro->heureDebut; ?></td>
            <td><?= $pro->heureFin; ?></td>
            <td><?= $pro->adresse; ?></td>
            <td>
                <a href="<?= $view->path('calendrier',array($prenom ,$pro->id)); ?>">Voir</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>