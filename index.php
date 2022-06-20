<?php
require_once './controllers/controllers.php';

if ((!isset($_REQUEST['command']))
||
($_REQUEST['command']=='homepage')) 
{
    afficherHomePage();
}    

?>