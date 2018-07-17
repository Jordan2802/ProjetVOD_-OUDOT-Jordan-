<!--
###########################################
############ PDO-Extension #############
###########################################
-->
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="latin_1">
    <title></title>
  </head>
  <body>
    <form class="" action="bdd.php" method="post">
      <input type="text" name="titreFilm" value="">
      <input type="submit" name="" value="ok">
    </form>
    <?php



    $host_name = 'localhost';
    $database = 'metrovod';
    $user_name = 'root';
    $password = '';

    $dbh = null;
    try {
      $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);

      $choixFilm = $_POST['titreFilm'];
      $reponse = $dbh->query('SELECT * FROM film WHERE titre_film = "'.$choixFilm.'"');

      // On affiche chaque entrée une à une
      while ($donnees = $reponse->fetch())
      {
          $IDfilm =    $donnees['ID_film'];
          $titreFilm =    $donnees['titre_film'];
          $synopsisFilm = $donnees['synopsis_film'];
          $afficheFilm =  $donnees["affiche_film"];

      }

      $reponse->closeCursor(); // Termine le traitement de la requête
    } catch (PDOException $e) {
      echo "Erreur!: " . $e->getMessage() . "<br/>";
      die();
    }


    ?>
  </body>
  <?php echo $titreFilm ?> <br>
  <?php echo $synopsisFilm ?> <br>
  <img src=" <?php echo $afficheFilm ?>  ">

</html>
