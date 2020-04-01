<?php

$routes = array(
    array('home','default','index'),
    array('contact','default','contact'),
    array('single','default','single',array('id')),
    array('single2','default','single2',array('id','slug')),
    array('inscription','user','inscription'),
    array('connexion','user','connexion'),
    array('calendrier','calendrier','calendrier'),
    array('addEnfant','user','addEnfant'),
    array('cgu', 'default', 'cgu'),
    array('mentions_legales', 'default','ml'),

    // articles
    array('articles','article','index'),

);









