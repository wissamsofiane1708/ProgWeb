<?php

    include('include/fonctions.php');
    $_SESSION['isConnected'] = false;
?>
<html>
  
    <head>
        

        <nav class="navbar-expand-md container-fluid red">

        

            <div class="navbar-expand-md pull-right " style="top:50px ">
                <div class="position-absolute" style="right: 20px;">   
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><I>Search</I></button>
                </form>
               </div>
        </div>
        <div class="navbar-expand-md ">
        <a class=" position-sticky btn-lg active badge-light border border-primary pull-right" href="Connexion.php"><strong>Espace personnel</strong></a>
        </div>
        <h1 class=" position-sticky shadow p-3 mb-3 text-info police" style=" top: 200px; text-align: center"> 
        
        <div class="position-relative col-md-8 " style="text-align:center">
                <a class="position-relative btn-lg active badge-info border border-primary " style ="left: 100px"  href="accueil.php">Accueil</a>
                <a class="position-relative btn-lg active badge-info border border-primary" style ="left: 250px" href="eleve.php">Eleves</a>
                <a class="position-relative btn-lg active badge-info border border-primary" style ="left: 400px" href="gestionnaire.php">Gestionnaires</a>
                
        </div> 

            </h1>
           
        </nav >
</head>



</html>