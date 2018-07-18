

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
    <title>détail du film</title>
  </head>
  <body>
    <header>
  <?php
  include("includes/header.html");
   ?>
    </header>
    <?php

    include("bdd.php");
    $choixFilm = $_POST['titreFilm'];
    $genreFilm = $_POST['genreFilm'];
    $RealFilm = $_POST['realFilm'];

    $reponse = $dbh->query('SELECT * FROM film
      INNER JOIN realise
      ON realise.ID_film = film.ID_film
      INNER JOIN realisateur
      ON realise.ID_REAL = realisateur.ID_REAL
      INNER JOIN appartenir
      ON appartenir.ID_film = film.ID_film
      INNER JOIN genre
      ON genre.ID_genre = appartenir.ID_genre
      INNER JOIN participe
      ON participe.ID_film = film.ID_film
      INNER JOIN acteur
      ON acteur.ID_acteur = participe.ID_acteur
      WHERE titre_film
      LIKE  "%'.$choixFilm.'%"');




    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
        $IDfilm =  $donnees['ID_film'];
        $titreFilm =  $donnees['titre_film'];
        $synopsisFilm = $donnees['synopsis_film'];
        $afficheFilm =  $donnees["affiche_film"];
        $genre =  $donnees["genre"];
        $acteurs =  $donnees["prenom_acteur"] . " " . $donnees["nom_acteur"] ;
        $realisateur = $donnees["prenom_real"] . " " . $donnees["nom_real"];

    }


    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>
  <div class="container">


    <?php
    include("includes/nav.php");
     ?>
    <main id="main-detail">
      <div class="detail-left">
        <div class="detail-affiche">
          <img src=" <?php echo $afficheFilm ?>  ">
        </div>
        <div class="detail-favoris">
          mettre en favoris
        </div>
        <div class="detail-trailer">
          trailer
        </div>
      </div>
      <div class="detail-right">
        <div class="detail-descr">
          <div class="detail-titreFilm">
            Titre: <span> <?php echo $titreFilm ?></span>
          </div>
          <div class="detail-realFilm">
            Réalisateur: <span><?php echo $realisateur ?></span>
          </div>
          <div class="detail-genreFilm">
            Genre: <span><?php echo $genre ?></span>
          </div>
          <div class="detail-acteurFilm">
            Acteurs: <span><?php echo $acteurs ?></span>
          </div>
          <div class="detail-synopsisFilm">
          Synopsis: <span> <?php echo $synopsisFilm ?></span>
          </div>
        </div>
        <div class="detail-valider">
          <input type="button" name="" value="Regarder">
        </div>
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
