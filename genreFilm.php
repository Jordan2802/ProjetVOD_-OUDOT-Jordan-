<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.6.0/slick/slick.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.6.0/slick/slick-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <title>Genres</title>
</head>
  <body>
    <header>
  <?php
  include("includes/header.php");
   ?>
    </header>
    <div class="container">
      <?php
      include("includes/nav.php");
      ?>
<main>
  <div class="detail-img">
  <?php
  include("bdd.php");
  ?>
  <?php
  
    $reponse2 = $dbh->query('SELECT * FROM film
                             INNER JOIN appartenir ON film.ID_film = appartenir.ID_film
                             WHERE ID_genre = "'.$_POST["genre_id"].'"');

      while ($donnees = $reponse2->fetch())
        {

          ?>

          <a href="details.php"><img src="<?php  echo $donnees["affiche_film"]; ?>" alt="image film"></a>


          <?php



        }
    ?>

    </div>
</main>
    </div>

    <footer>
      <?php
      include("includes/footer.html");
       ?>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
  </body>
</html>
