<?php

$routes = array(
    array('home','default','index'),
    array('contact','default','contact'),
    array('single','default','single',array('id')),
    array('single2','default','single2',array('id','slug')),
    array('inscription','user','inscription'),
    array('connexion','user','connexion'),
  
    array('deconnexion','user','deconnexion'),
    array('calendrier','calendrier','calendrier',array('prenom','nom')),
    array('calendrier','calendrier','listingEnfantDuParent', array('$chi_user_id_user')),

    array('carte','carte','afficherPros'),
    array('carteUser','carte','afficherLienPros',array('prenom')),
    array('addEnfant','user','addEnfant',array('prenom')),
    array('voirMesEnfants','user','mesEnfants', array('prenom')),
    array('cgu', 'default', 'cgu'),
    array('mentions_legales', 'default','ml'),

    array('listingPro','pro','listingPro',array('prenom')),

    array('facturation', 'facture', 'afficherUser',array('$prenom')),
    // articles
    array('articles','article','index'),

);









