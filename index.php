<?php

require_once( "include/fonctions.php");
    $eleves = getDb()->prepare('SELECT Nom from Eleve');
    
    
?>
<html>

<?php require_once("include/head.php");
require_once('include/header.php'); 
echo $stmt;?>



</html> 