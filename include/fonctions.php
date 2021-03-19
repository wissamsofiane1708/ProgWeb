
<?php



include_once('include/head.php');

function getDb() {
  return new PDO("mysql:host=localhost;dbname=projetprogweb;charset=utf8", "wiwi", "wiwi",
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
}?>

      
    