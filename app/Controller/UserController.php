<?php

namespace App\Controller;


use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;
use App\Weblitzer\ModelUser;

/**
 *
 */
class UserController extends Controller
{


    public function add()
    {
        $errors = array();
        if(!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            // validation
            $validation = new Validation();
            $errors = $this->validationUser($validation,$errors,$post);
            if($validation->IsValid($errors)) {
                ModelUser::insertUser($post);
                $this->redirect('user');
            }
        }
        $form = new Form($errors);
        $this->render('app.default.inscription',array(
            'form'  => $form
        ));
    }


    private function validationUser($validation,$errors,$post)
    {
        $errors['nom']    = $validation->textValid($post['nom'], 'nom',1,150);
        $errors['prenom'] = $validation->textValid($post['prenom'], 'prenom',1,  150);
        $errors['mdp'] = $validation->textValid($post['mdp'], 'mdp',5,  150);
        $errors['adresse'] = $validation->textValid($post['adresse'], 'adresse',5,  150);
        $errors['ville'] = $validation->textValid($post['ville'], 'ville',5,  150);
        $errors['email']  = $validation->emailValid($post['email']);
        // validation age

        return $errors;
    }




}
