<?php
session_start();
include_once('include/header.php');
?>
<html>
    <body>
        
    
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel = "stylesheet" href="css/style.css">

             

            
        


          <div class="navbar-expand-md container-fluid backAccueil">
          <br /> <br />
          <h1 class="text-info" style ="text-align: center">Inscription </h1>
          
          <form class="position-relative text-primary " style ="text-align: center" method="post" action ="inscription.php" enctype="multipart/form-data"><br />

          <label for="id"> Pseudo :</label>
            <input class= "position-relative"  style="left: 79px" name="usrname" type="text" id="id" placeholder="Entrez votre pseudo"/>
              <br /><br />

          <label for="password"> Mot de Passe :</label>
            <input class= "position-relative"  style="left: 57px" type="password" name="password" id="password" placeholder="Entrez votre mot de passe" />
              <br /><br />

          <label for="mail"> Mail :</label>
            <input class= "position-relative"  style="left: 90px"  type="mail" name="mail" id="mail" placeholder="Entrez votre mail"/>
              <br /> <br />
          <label for="promo">Promotion  :</label>
            <input class= "position-relative"  style="left: 90px"  type="text" name="promo" id="promo" placeholder="Entrez votre promo"/>
              <br /> <br />

          <button class=" position-relative btn-lg btn-info" style=""  >  S'inscrire</button>

          </form>


      
        </div>
        </body>
        <?php
        include_once('include/footer.php');
        ?>
      
