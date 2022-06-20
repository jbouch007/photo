<?php
require_once 'php/models/utilisateur.php';
class utilisateurDataAccess
{
    public static function create($pdo, $utilisateur)
    {
        $sql="INSERT INTO UTILISATEUR (pseudo, email, motdepasse) 
        VALUES ('$utilisateur->pseudo', '$utilisateur->email', '$utilisateur->motdepasse')";
        echo "<br>UtilisateurDataAccess::create - sql=$sql";
        try {
            $pdo->exec();
        } catch (PDOException $exception) {
            return false;
        }
    }
    public static function checkPassword($pdo, $pseudo, $motdepasse):bool
    {
        return true;
    }
}
