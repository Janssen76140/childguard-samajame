<?php

namespace App\Controller;


use App\Model\ModelCarte;
use App\Weblitzer\Controller;

/**
 *
 */
class CarteController extends Controller
{
    public function carte()

    {
        $this->render('app.carte.carte');
    }


    public function afficherPros()

    {
        $pros = ModelCarte::all();
        $this->render('app.carte.carte',array(
            'pros' => $pros,

        ));

        echo json_encode($pros);
    }

    public function afficherLienPros($prenom)

    {
        $pros = ModelCarte::all();
        $this->render('app.carte.carteUser',array(
            'pros' => $pros,
            'prenom' => $prenom,

        ));

        echo json_encode($pros);
    }

}
