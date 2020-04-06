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
       // $this->afficherprenomEnfants($prenomEnfants);
        $this->render('app.calendrier.calendrier',array(
            'id'=>$id,
            'id_user' =>$id_user,
            'prenom' => $prenom,
            //'prenomEnfants' => $prenomEnfants,
        ));
    }


   /* public function afficherprenomEnfants($prenomEnfants)
        {
            foreach ($prenomEnfants as $prenomEnfant){
               echo '<div class="fc-event">' .$prenomEnfant->prenom. '</div>';
           }
        }
   */

    public function reserver()
    {

    }

}
