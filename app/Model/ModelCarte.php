<?php


namespace App\Model;

use App\App;
use App\Weblitzer\Model;

class ModelCarte extends Model

{

    protected static $table = 'chi_pro';


    public static function afficherPros()
    {
        Model::all();

    }



}