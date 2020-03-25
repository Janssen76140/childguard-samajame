<?php

namespace App\Weblitzer;
use App\App;
/**
 *
 */
class ModelUser extends Model
{
    protected static $table = 'chi_user';


    public static function insertUser($post)
    {
        App::getDatabase()->prepareInsert("INSERT INTO " . self::getTable() . " (nom,prenom,email,mdp,adresse,ville,téléphone,created_at,modified_at) VALUES (?,?,?,?,?,?,?,NOW(),NOW()) ",[$post['nom'],$post['prenom'],$post['email'],$post['mdp'],$post['adresse'],$post['ville'],$post['téléphone']]);

    }


    public static function userConnexion(string $email)
    {
        $sql = "SELECT * FROM " . self::getTable() . " WHERE email= ?";
        return App::getDatabase()->prepare($sql, [$email], get_called_class(),true);
    }


}
