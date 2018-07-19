<!--
carousel
-->
<main>
  <?php
  include("bdd.php");
  ?>
  <?php
    $reponse3 = $dbh->query('SELECT affiche_film FROM film');
    $reponse4 = $dbh->query('SELECT affiche_film FROM film');
    $reponse5 = $dbh->query('SELECT affiche_film FROM film');
    $reponse6 = $dbh->query('SELECT affiche_film FROM film');
    $reponse7 = $dbh->query('SELECT affiche_film FROM film');
    $reponse8 = $dbh->query('SELECT affiche_film FROM film');
    ?>
  <div class="main-carousel">
    <h2>Nouveautés:</h2>
    <div class="slider-nav">

      <?php
      while ($donnees = $reponse3->fetch())
      {
        ?>
        <div>
        <img src="<?php  echo $donnees["affiche_film"]; ?>" alt="affiche avengers">
        </div>
        <?php
      }
      ?>

    </div>
    <div class="affiche affiche-cacher">
      <div class="croix"></div>
      <div class="slider-for ">
        <?php
        while ($donnees = $reponse4->fetch())
        {
          ?>
          <div>
          <img src="<?php  echo $donnees["affiche_film"]; ?>" alt="affiche avengers">
          </div>
          <?php
        }
        ?>
          <div class="description">
             <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
      </div>

    </div>

  <div class="main-carousel2">
    <h2>Prochainement:</h2>
    <div class="slider-nav2">
      <?php
      while ($donnees = $reponse5->fetch())
      {
        ?>
        <div>
        <img src="<?php  echo $donnees["affiche_film"]; ?>" alt="affiche avengers">
        </div>
        <?php
      }
      ?>
    </div>
    <div class="affiche2 affiche-cacher">
      <div class="croix2"></div>
      <div class="slider-for2">
        <?php
        while ($donnees = $reponse6->fetch())
        {
          ?>
          <div>
          <img src="<?php  echo $donnees["affiche_film"]; ?>" alt="affiche avengers">
          </div>
          <?php
        }
        ?>
          <div class="description2">
             <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
      </div>
    </div>

  <div class="main-carousel3">
    <h2>Favoris:</h2>
    <div class="slider-nav3">
      <?php
      while ($donnees = $reponse7->fetch())
      {
        ?>
        <div>
        <img src="<?php  echo $donnees["affiche_film"]; ?>" alt="affiche avengers">
        </div>
        <?php
      }
      ?>
    </div>
    <div class="affiche3 affiche-cacher">
      <div class="croix3"></div>
      <div class="slider-for3">

          <?php
          while ($donnees = $reponse8->fetch())
          {
            ?>

            <div>
            <img src="<?php  echo $donnees["affiche_film"]; ?>" alt="affiche avengers">
            </div>
            <?php
          }
          ?>
          <div class="description3">
             <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
      </div>
    </div>

</main>
