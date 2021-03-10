
<?php
session_start();
define('ERR_IS_CO','Vous ne pouvez pas accéder à cette page si vous n\'êtes pas connecté');
include_once('fonctions.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="lib/bootstrap/bootstrap.css">
        <link rel = "stylesheet" href="/style.css">

        <div class="navbar-expand-md container-fluid red " >

<?php
            if (isset($_SESSION['ConnectOK']) && ($_SESSION['ConnectOK'] == true)){
                afficher_bouton_deconnexion();
            }else{
                afficher_bouton_connexion();
            }
?>

            <nav class=" navbar navbar-expand-md " style="top: 10px ">
                <nav class="position-absolute" style="right: 20px">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>
            </nav>

            <h1 class=" position-sticky shadow p-3 mb-3 bg title rounded  text-info police" style="top: 200px"> MoMassage
            <nav class="position-relative col-md-8 " style="text-align:center">
                <a class="position-relative btn-lg active badge-info border border-primary " style ="left: 100px"  href="../index.php">Accueil</a>
                <a class="position-relative btn-lg active badge-info border border-primary" style ="left: 200px" href="../view/Massages.php">Massages</a>
                <a class="position-relative btn-lg active badge-info border border-primary" style ="left: 300px" href="../view/Masseurs.php">Masseurs</a>
                <a class="position-relative  btn-lg active badge-info border border-primary" style ="left: 400px"  href="../view/Produits.php">Produits</a>
            </nav>

            </h1>
        </div >
<?php
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

if($id!=0){
    erreur(ERR_IS_CO);
} 
?>

<html>
<head>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    </body>
    <div class="navbar-expand-md container-fluid backAccueil">
            <div  class="col-md-5 container-fluid mt" style ="left: 200px"> <form method="post" action ="../view/connexion.php"><br />
              <fieldset>
                <legend class="position-relative text-info" style ="left: 100px">Connexion</legend><br />
                <p>
                  <label class ="text-info" for="id"> Identifiant:</label><input class="position-relative " style ="left: 80px" name="usrname" type="text" id="id" /><br /><br />

                  <label class="text-info" for="password">Mot de Passe :</label><input class="position-relative " style ="left: 50px" type="password" name="password" id="password" /><br /><br />
                </p>
                </fieldset>

                <form action="connexion.php" ><input class="position-relative  btn-lg btn-info " style ="left: 100px"  type="submit" value="Connexion" /> </form>

                <a class="position-relative" style ="left: 100px" href="inscription.php"> Pas encore inscrit ? </a> <br />
              </div>
<?php


        if ( isset($_POST['usrname'])&&  isset($_POST['password'])){
            $res = connexion();

            if($res == true){
            echo "connecté";
                $_SESSION['pseudo'] = $_POST['usrname'];
                $_SESSION['ConnectOK'] = true;
                if (already_checked($_POST['usrname'], $_POST['password'])){
                  header('location: ../index.php');
                }else{
                    header('location: ../view/validateuser.php');
                }

            }else{
                echo '<div class="position-relative badge-lg badge-light text-wrap text-danger font-weight-bold" style="width: 10rem; left: 650px" >';
                print_r("Veuillez réessayer. Votre mot de passe ou votre idenfiant ne fonctionne pas !");
              echo '</div> ';
            }
        }

          '</div>';

        ?>

</body>
</html>
