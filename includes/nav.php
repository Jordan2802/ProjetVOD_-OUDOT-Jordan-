<!--
nav
-->


<nav>
  <div class="nav--search">
    <h2>Rechercher un film:</h2>
    <form class="form--search" action="details.php" method="post">
      <div><label for="">Titre:</label><input type="text" name="titreFilm" value=""></div><br>
      <div><input type="submit" id="button--search" name="search" value="Rechercher"></div>
    </form>
  </div>
  <div class="nav--genre">
    <h2>Genre:</h2>
    <ul>
      <li> <a href="./tout.php"> Voir tout les films</a></li>
      <?php
      include("bdd.php");
      ?>
      <?php

        $reponse3 = $dbh->query('SELECT * FROM genre ORDER BY genre ');
            while ($donnees = $reponse3->fetch())
            {

              ?>
              <form class="" action="./genreFilm.php" method="post">
          <input type="hidden" name="genre_id" value=" <?php echo $donnees['ID_genre']; ?> ">
        <li>  <input type="submit" name="button" value=" <?php echo $donnees['genre']; ?>" ></li>
        </form>
              <?php


            }
        ?>
    </ul>
  </div>
</nav>
