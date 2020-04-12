<?php


namespace App\Model;
use App\App;
use App\Weblitzer\Model;

class ModelFacture extends Model
{
    protected static $table = 'chi_facture';

    public static function afficherFacture($id='id_user')
    {
        /*   global $pdo;

            $sql = "SELECT * FROM chi_facture";
            $query = $pdo->prepare($sql);
            $query->execute();
            $facture = $query->fetchAll();
            return ($users);
    */
        return App::getDatabase()->prepare("SELECT * FROM chi_user JOIN chi_facture ON chi_user.id_user = chi_facture.id_user",[$id],
            get_called_class(),false);
    }
}

