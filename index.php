<?php
require_once "fonctions.php";
session_start();

// Retrieve all movies
$eleves = getDb()->query('select * from eleve'); 
?>

<!doctype html>
<html>

<?php require_once "head.php"; ?>

<body>
    <div class="container">
        <?php require_once "header.php"; ?>

        

        <?php require_once "footer.php"; ?>
    </div>

    
</body>

</html>