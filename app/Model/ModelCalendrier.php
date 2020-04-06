<?php

namespace App\Model;
use App\App;
use App\Weblitzer\Model;

class ModelCalendrier extends Model

{
   // private $prenomEnfant;
    protected static $table = 'chi_enfant_has_chi_pro';


    public static function addReservation($post)
    {
        App::getDatabase()->prepareInsert("INSERT INTO " . self::getTable() . " (chi_enfant_id_enfant,	chi_pro_id_pro,jour,heureDebut,heureFin) VALUES (?,?,?,?,?) ",[$post['chi_enfant_id_enfant'],$post['chi_pro_id_pro'],$post['email'],$post['jour'],$post['heureDebut'],$post['heureFin']]);

    }



    public static function listingEnfantDuParent($prenomEnfants)
    {
      /*  global $pdo;

        $sql = "SELECT prenom FROM chi_enfant LEFT JOIN chi_enfant_has_chi_user ON chi_enfant.id_enfant = chi_enfant_has_chi_user.chi_enfant_id_enfant WHERE chi_user_id_user = chi_enfant.id_parent";
        $query = $pdo->prepare($sql);
        $query->execute();
        $prenomEnfants = $query->fetchAll();
      */
    }


}