<?php

namespace App\Controller;


use App\Model\ModelUser;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;


/**
 *
 */
class UserController extends Controller
{


    public function inscription()
    {
        $errors = array();
        if(!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            // validation
            $validation = new Validation();
            $errors = $this->validationUser($validation,$errors,$post);
            if($validation->IsValid($errors)) {
                ModelUser::insertUser($post);
                $this->redirect('connexion');
            }
        }
        $form = new Form($errors);
        $this->render('app.user.inscription',array(
            'form'  => $form
        ));
    }


    public function connexion()
    {

        $errors = array();
        $form = new Form($errors, 'post');
        if (isset($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $validation = new Validation();
            $errors['email'] = $validation->emailValid($post['email']);

            if ($validation->IsValid($errors) == true) {
                $user = ModelUser::userConnexion($post['email']);
                if ($user->email === $post['email'] && password_verify($post['mdp'], $user->mdp)) {
                    $_SESSION = array(
                        'id'    => $user->id,
                        'nom'   => $user->nom,
                        'prenom'=> $user->prenom,
                        'mail' => $user->mail,

                    );
                    $this->redirect('mesEnfants');
                    unset($_POST);
                } else {
                    $errors['mdp'] = 'Mot de passe ou mail incorrect';
                }
            }
        } else {
            $errors['email'] = 'Error ';
        }

        $this->render('app.user.connexion', array(
            'form'  => $form,
        ));
    }


    private function validationUser($validation,$errors,$post)
    {
        $errors['nom']    = $validation->textValid($post['nom'], 'nom',1,150);
        $errors['prenom'] = $validation->textValid($post['prenom'], 'prenom',1,  150);
        $errors['mdp'] = $validation->textValid($post['mdp'], 'mdp',5,  150);
        $errors['adresse'] = $validation->textValid($post['adresse'], 'adresse',5,  150);
        $errors['ville'] = $validation->textValid($post['ville'], 'ville',2,  150);
        $errors['email']  = $validation->emailValid($post['email']);
        // validation age

        return $errors;
    }

    private function validationEnfant($validation,$errors,$post)
    {
        $errors['nom']    = $validation->textValid($post['nom'], 'nom',1,150);
        $errors['prenom'] = $validation->textValid($post['prenom'], 'prenom',1,  150);
        $errors['responsableLegal'] = $validation->textValid($post['responsableLegal'], 'responsableLegal',5,  150);
        $errors['age'] = $validation->textValid($post['age'], 'age',1,  50);
        $errors['allergie'] = $validation->textValid($post['allergie'], 'allergie',1,250);
        $errors['vaccins']  = $validation->textValid($post['vaccins'], 'vaccins',1,250);
        $errors['maladie']  = $validation->textValid($post['maladie'], 'maladie',1,250);
        $errors['regimeAlimentaire']  = $validation->textValid($post['regimeAlimentaire'], 'regimeAlimentaire',5,  150);
        // validation age

        return $errors;
    }

    public function addEnfant()
    {
        $errors = array();
        if(!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            // validation
            $validation = new Validation();
            $errors = $this->validationEnfant($validation,$errors,$post);
            if($validation->IsValid($errors)) {
                ModelUser::insertEnfant($post);
                $this->redirect('addEnfant');
            }
        }


        $form = new Form($errors);
        $this->render('app.user.mesEnfants',array(
            'form'  => $form
        ));
    }




}
