<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Asset" rel="stylesheet">
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
            <form class="" action="details3.php" method="post" >
              <input type="hidden" name="filmgenre_id" value="<?php echo $donnees['ID_film']; ?>">
              <label for="<?php echo $donnees['ID_film']; ?>"> <img src="<?php  echo $donnees["affiche_film"]; ?>" alt="image film"></label> <br> <input type="submit" name="button" id="<?php echo $donnees['ID_film']; ?>" class="hidden-button" value="">
            </form>



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
    <script type="text/javascript" src="js/app.js"></script>
  </body>
</html>
