
<?php
include_once('head.php');


      function clean($str){
          $link = connect();
          $str = mysqli_real_escape_string($link, $str);
          return $str;
      }
/*
      function erreur(){
          $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
          exit('<p>'.$mess.'</p>
          <p>Cliquez <a href="../page_principale/pp_view.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
      }

  */    

      function already_checked($usr, $pswd){
          $clean_user = $_SESSION['pseudo'];
          $hash = $_SESSION['pswd'];
          return check_if_already_taken($clean_user, $hash);
      }

      function afficher_bouton_deconnexion(){
        echo ' <div class="container-fluid red pull-right style= right">
        <a class=" position-sticky btn-lg active badge-light border border-primary" style="top: 20px" href="../view/deconnex.php"> Deconnexion </a>
        <h1 class="position-absolute text-light" style="left: 500px">Restez-Zen !  </h1>';
      }

      function afficher_bouton_connexion(){
            echo '<a class=" position-sticky btn-lg active badge-light border border-primary pull-right" href="connexion.php">Espace personnel</a>';
      }

      
      function getDb(){
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        foreach($url as $urls){
          echo $urls;
        }
        
        $server = $url["host"];
        $username = $url["user"];
        $password = $url["pass"];
        $db = substr($url["path"], 1);
        
        return new PDO("mysql:host=$server;dbname=$db;charset=utf8", "$username", "$password",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }
?>
</body>

</html>
