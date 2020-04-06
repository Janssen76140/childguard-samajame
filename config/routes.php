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
    array('calendrier','calendrier','listingEnfantDuParent', array('$chi_iser_id_user')),

    array('addEnfant','user','addEnfant',array('prenom')),

    array('listingPro','pro','listingPro',array('prenom')),

    // articles
    array('articles','article','index'),

);









