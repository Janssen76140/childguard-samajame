<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class CalendrierController extends Controller
{
    public function calendrier($id, $id_user, $prenom)
    {

        $this->render('app.calendrier.calendrier',array(
            'id'=>$id,
            'id_user' =>$id_user,
            'prenom' => $prenom,
        ));
    }


    public function reserver()
    {

    }

}
