<?php

namespace App\Controller;

use App\Model\ModelCalendrier;
use App\Weblitzer\Controller;

/**
 *
 */
class CalendrierController extends Controller
{
    public function calendrier($prenom, $nom)

    {
      // $this->afficherprenomEnfants($prenomEnfants);
        $this->render('app.calendrier.calendrier',array(
            'nom'=>$nom,
            'prenom' => $prenom,
        ));
    }


   public function afficherprenomEnfants($chi_user_id_user)
        {
            $prenomEnfants = ModelCalendrier::listingEnfantDuParent($chi_user_id_user);
            foreach ($prenomEnfants as $prenomEnfant)
            {
               echo '<div class="fc-event">' .$prenomEnfant->prenom. '</div>';
            }

        }


    public function reserver()
    {

    }

}
