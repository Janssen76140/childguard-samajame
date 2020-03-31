<?php

namespace App\Model;
use App\App;
use App\Weblitzer\Model;

class ModelCalendrier extends Model
{
    protected static $table = 'chi_enfant_has_chi_pro';


    public static function addReservation($post)
    {
        App::getDatabase()->prepareInsert("INSERT INTO " . self::getTable() . " (chi_enfant_id_enfant,	chi_pro_id_pro,jour,heureDebut,heureFin) VALUES (?,?,?,?,?) ",[$post['chi_enfant_id_enfant'],$post['chi_pro_id_pro'],$post['email'],$post['jour'],$post['heureDebut'],$post['heureFin']]);

    }


}