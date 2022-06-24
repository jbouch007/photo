<?php
require_once './controllers/controllers.php';
require_once 'C:\wamp64\www\photo\photo\database\utilisateurDataAcess.php';

if ((!isset($_REQUEST['command']))
||
($_REQUEST['command']=='homepage')) 
{
    afficherHomePage();
} 
else 
{
    if($_REQUEST['command']=='login')
    &&
    (utilisateurDataAccess::checkPassword($_POST['email'],$_POST['motdepasse']))
    {
        $_SESSION['connected'] = true;
    }
    afficherHomePage();
}   

?>