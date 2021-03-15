<html>
<?php    
include_once('include/header.php');
?>


    <body>
    <div class="navbar-expand-md container-fluid backAccueil">
            <div  class="col-md-5 container-fluid mt" style ="left: 200px"> <form method="post" action ="../view/connexion.php"><br />
              <fieldset>
                <legend class="position-relative text-info" style ="left: 100px">Connexion</legend><br />
                <p>
                  <label class ="text-info" for="id"> Identifiant:</label><input class="position-relative " style ="left: 80px" name="usrname" type="text" id="id" placeholder="Entrez votre identifiant" /><br /><br />

                  <label class="text-info" for="password">Mot de Passe :</label><input class="position-relative " style ="left: 50px" type="password" name="password" id="password" placeholder="Entrez votre mot de passe"/><br /><br />
                </p>
                </fieldset>

                <form action="connexion.php" ><input class="position-relative  btn-lg btn-info " style ="left: 100px"  type="submit" value="Connexion" /> </form>

                <a class="position-relative" style ="left: 100px" href="inscription.php"> Pas encore inscrit ? </a> <br />
              </div>


          </div>


</body>
<?php
    include_once('include/footer.php');
    ?>
</html>
