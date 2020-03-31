<?php

namespace App\Model;
use App\App;
use App\Weblitzer\Model;

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


    public static function insertEnfant($post)
    {
        App::getDatabase()->prepareInsert("INSERT INTO chi_enfant (nom,prenom,responsableLegal,age,allergie,vaccins,maladie,regimeAlimentaire,id_parent,created_at,modified_at) VALUES (?,?,?,?,?,?,?,?,?,NOW(),NOW()) ",[$post['nom'],$post['prenom'],$post['responsableLegal'],$post['age'],$post['allergie'],$post['vaccins'],$post['maladie'],$post['regimeAlimentaire'],$post['id_parent']]);

    }


    public static function userConnexion(string $email)
    {
        $sql = "SELECT * FROM " . self::getTable() . " WHERE email= ?";
        return App::getDatabase()->prepare($sql, [$email], get_called_class(),true);
    }


}
