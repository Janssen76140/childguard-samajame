<?php

namespace App\Model;
use App\App;
use App\Weblitzer\Model;

class ModelPro extends Model
{
    protected static $table = 'chi_pro';


    public static function listingPro()
    {
      Model::all();

    }


}