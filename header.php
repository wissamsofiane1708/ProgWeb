<?php

    include('fonctions.php');
    $_SESSION['isConnected'] = false;
?>
<html>
    <head>
        <link rel="stylesheet" href="lib/bootstrap/bootstrap.min.css">
        <link rel = "stylesheet" href="style.css">

        <div class="navbar-expand-md container-fluid red" >

            <?php
            if (isset($_SESSION['ConnectOK']) && ($_SESSION['ConnectOK'] == true)){
                afficher_bouton_deconnexion();
            }else{
                afficher_bouton_connexion();
            }
            ?>

            <div class="navbar navbar-expand-md pull-right " style="top:100px ">
                <div class="position-absolute " >   
                <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
               </div>
        </div>
              

            <h1 class=" position-sticky shadow p-3 mb-3 bg title rounded  text-info police" style="top: 500px"> 
        <div class=" col-md-8 " style ="text:align:center;position:relative">  
                <a class="position-relative btn-lg active badge-info border border-primary " style ="left: 100px"  href="accueil.php">Accueil</a>
                <a class="position-relative btn-lg active badge-info border border-primary" style ="left: 300px" href="Eleve.php">Eleves</a>
                <a class="position-relative btn-lg active badge-info border border-primary" style ="left: 500px" href="Gestionnaire.php">Gestionnaire</a>
        </div>    

            </h1>
        </div >
</head>



</html>