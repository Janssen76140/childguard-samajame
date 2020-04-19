<?php

// app/Controller/ArticleController

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class ArticleController extends Controller
{
    public function index()
    {

        $titre = 'mes articles';
        $this->render('app.article.listing',array(
                'titre'  => $titre
        ));
    }
}
