<?php


namespace App\Controller;

use App\Model\ModelFacture;
use App\Weblitzer\Controller;

class FactureController extends Controller
{

    public function afficherUser($prenom)
    {
       $users = ModelFacture::afficherFacture();
       $this->debug($users);
       $this->render('app.facturation.facturation',array(
            'users'=>$users,
            'prenom'=>$prenom,
        ));
    }
}