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
          <form class="position-relative text-primary" style ="text-align: center" method="post" action ="inscription.php" enctype="multipart/form-data"><br />

          <label for="id"> Pseudo :</label>
            <input class= "position-relative"  style="left: 79px" name="usrname" type="text" id="id" />
              <br /><br />

          <label for="password"> Mot de Passe :</label>
            <input class= "position-relative"  style="left: 57px" type="password" name="password" id="password" />
              <br /><br />

          <label for="mail"> Mail :</label>
            <input class= "position-relative"  style="left: 90px"  type="mail" name="mail" id="mail" />
              <br /> <br />
              <br /> <br />

          <button class=" position-relative btn-lg btn-info" style=""  >  S\'inscrire</button>

          </form>


      <?php  if ( isset($_POST['usrname']) && isset($_POST['password']) && isset($_POST['mail'])){
            $_SESSION['Uniqid'] = generate_code();
            $res = register();
            if($res == false){
              echo '<div class="position-relative badge-lg badge-light text-wrap text-danger font-weight-bold" style="width: 10rem; left: 650px" >';
              print_r("Une erreur s'est produite. Le nom ou l'adresse mail est déjà utilisé!");
              echo '</div> ';

            }else{
                print_r("registred");
                header('location: ../view/connexion.php');
            }
        }
        ?>
        </div>
        </body>
        <?php
        include_once('include/footer.php');
        ?>
      
