<?php
namespace App\Service;

class Validation
{
    protected $errors = array();

    public function IsValid($errors)
    {
        foreach ($errors as $key => $value) {
            if(!empty($value)) {
                return false;
            }
        }
        return true;
    }

    /**
     * emailValid
     * @param email $email
     * @return string $error
     */

    public function emailValid($email)
    {
        $error = '';
        if(empty($email) || (filter_var($email, FILTER_VALIDATE_EMAIL)) === false) {
            $error = 'Adresse email invalide.';
        }
        return $error;
    }

    /**
     * textValid
     * @param POST $text string
     * @param title $title string
     * @param min $min int
     * @param max $max int
     * @param empty $empty bool
     * @return string $error
     */

    public function textValid($text, $title, $min = 1,  $max = 50, $empty = true)
    {

        $error = '';
        if(!empty($text)) {
            $strtext = strlen($text);
            if($strtext > $max) {
                $error = 'Votre ' . $title . ' est trop long.';
            } elseif($strtext < $min) {
                $error = 'Votre ' . $title . ' est trop court.';
            }
        } else {
            if($empty) {
                $error = 'Veuillez renseigner un ' . $title . '.';
            }
        }
        return $error;

    }

    public function is_logged()
    {
        $roles = array('user', 'admin');
        if (!empty($_SESSION['login'])) {
            if (!empty($_SESSION['login']['id']) && is_numeric($_SESSION['login']['id'])) {
                if (!empty($_SESSION['login']['nom'])) {
                    if (in_array($_SESSION['login']['role'], $roles)) {
                        if (!empty($_SESSION['login']['ip'])) {
                            if (!empty($_SESSION['login']['ip']) == $_SERVER['REMOTE_ADDR']) {
                                return true;
                            }
                        }
                    }
                }
            }
        }
        return false;
    }


}
