<?php
require_once 'imageDataAccess.php';
require_once 'photoDataAccess.php';
require_once 'utilisateurDataAccess.php';

function pdo_connect()
{
    $host='localhost';
    $user='root';
    $password='';
    $name='webimage';
    try {
        return PDO("mysql:host=$host;dbname=$name;charset=utf8" ,$user, $password);
    } catch (PDOException $exception) {
        echo $exception->getMessage();
        die('CONNECTION ECHOUEE');
    }
}
?>