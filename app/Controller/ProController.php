<?php

// app/Controller/ArticleController

namespace App\Controller;

use App\Model\ModelPro;
use App\Weblitzer\Controller;

/**
 *
 */
class ProController extends Controller
{
    public function listingPro($prenom)
    {

        $pros = ModelPro::all();
        $this->render('app.pro.listingPro',array(
            'pros' => $pros,
            'prenom' => $prenom,
        ));
    }

}