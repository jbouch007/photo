<?php
function afficherHomePage()
{
    //il va falloir détecter plus tard si l'utilisateur est connecté
    $connecte = false;
    if ($connecte)
    require_once 'C:\wamp64\www\photo\photo\views\homepage\template_homepage_connected.php';
    else
    require_once 'C:\wamp64\www\photo\photo\views\homepage\template_homepage_not_connected.php';
    
}
?>