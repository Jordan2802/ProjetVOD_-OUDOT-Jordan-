<!--
carousel
-->
<?php
    $host_name = 'localhost';
    $database = 'metrovod';
    $user_name = 'root';
    $password = '';

    $dbh = null;
    try {
      $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
      echo "<p>Connexion au serveur MySQL établie avec succès via pdo.</p >";
    } catch (PDOException $e) {
      echo "Erreur!: " . $e->getMessage() . "<br/>";
      die();
    }

    $reponse = $dbh->query('SELECT * FROM film WHERE ID_film = 4 ');
    //echo $reponse->fetch()[0];
    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
    ?>
        <p>
        <strong>ID genre</strong> : <?php echo $donnees['ID_film']; ?><br />
        film : <?php echo $donnees['titre_film']; ?><br />
        synopis : <?php echo $donnees['synopsis_film']; ?><br />
        affiche:<?php echo '<img src=" '. $donnees["affiche_film"] .' ">'; ?><br />
       </p>
    <?php
    }

    $reponse->closeCursor(); // Termine le traitement de la requête

    ?>
<main>
  <div class="main-carousel">
    <h2>Nouveautés:</h2>
    <div class="slider-nav">
      <div><img src="img/avengers.jpg" alt="affiche avengers"></div>
      <div><img src="img/forrestgump.jpg" alt="affiche forrestgump"></div>
      <div><img src="img/gladiator.jpg" alt="affiche gladiator"></div>
      <div><img src="img/joy.jpg" alt="affiche avengers"></div>
      <div><img src="img/warcraft.jpg" alt="affiche forrestgump"></div>
      <div><img src="img/tueurs.jpg" alt="affiche gladiator"></div>
      <div><img src="img/blade-runner.jpg" alt="affiche avengers"></div>
      <div><img src="img/avatar.jpg" alt="affiche forrestgump"></div>
      <div><img src="img/lone-ranger.jpg" alt="affiche gladiator"></div>
    </div>
    <div class="affiche affiche-cacher">
      <div class="croix"></div>
      <div class="slider-for ">
        <div><img src="img/avengers.jpg" alt="affiche avengers">
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/forrestgump.jpg" alt="affiche forrestgump">
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/gladiator.jpg" alt="affiche gladiator">
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/joy.jpg" alt="affiche avengers">
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/warcraft.jpg" alt="affiche forrestgump">
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/tueurs.jpg" alt="affiche gladiator">
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/blade-runner.jpg" alt="affiche avengers">
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/avatar.jpg" alt="affiche forrestgump">
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/lone-ranger.jpg" alt="affiche gladiator">
          <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="main-carousel2">
    <h2>Prochainement:</h2>
    <div class="slider-nav2">
      <div><img src="img/avengers.jpg" alt="affiche avengers"></div>
      <div><img src="img/forrestgump.jpg" alt="affiche forrestgump"></div>
      <div><img src="img/gladiator.jpg" alt="affiche gladiator"></div>
      <div><img src="img/joy.jpg" alt="affiche avengers"></div>
      <div><img src="img/warcraft.jpg" alt="affiche forrestgump"></div>
      <div><img src="img/tueurs.jpg" alt="affiche gladiator"></div>
      <div><img src="img/blade-runner.jpg" alt="affiche avengers"></div>
      <div><img src="img/avatar.jpg" alt="affiche forrestgump"></div>
      <div><img src="img/lone-ranger.jpg" alt="affiche gladiator"></div>
    </div>
    <div class="affiche2 affiche-cacher">
      <div class="croix2"></div>
      <div class="slider-for2">
        <div><img src="img/avengers.jpg" alt="affiche avengers">
          <div class="description2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/forrestgump.jpg" alt="affiche forrestgump">
          <div class="description2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/gladiator.jpg" alt="affiche gladiator">
          <div class="description2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/joy.jpg" alt="affiche avengers">
          <div class="description2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/warcraft.jpg" alt="affiche forrestgump">
          <div class="description2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/tueurs.jpg" alt="affiche gladiator">
          <div class="description2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/blade-runner.jpg" alt="affiche avengers">
          <div class="description2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/avatar.jpg" alt="affiche forrestgump">
          <div class="description2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/lone-ranger.jpg" alt="affiche gladiator">
          <div class="description2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="main-carousel3">
    <h2>Favoris:</h2>
    <div class="slider-nav3">
      <div><img src="img/avengers.jpg" alt="affiche avengers"></div>
      <div><img src="img/forrestgump.jpg" alt="affiche forrestgump"></div>
      <div><img src="img/gladiator.jpg" alt="affiche gladiator"></div>
      <div><img src="img/joy.jpg" alt="affiche avengers"></div>
      <div><img src="img/warcraft.jpg" alt="affiche forrestgump"></div>
      <div><img src="img/tueurs.jpg" alt="affiche gladiator"></div>
      <div><img src="img/blade-runner.jpg" alt="affiche avengers"></div>
      <div><img src="img/avatar.jpg" alt="affiche forrestgump"></div>
      <div><img src="img/lone-ranger.jpg" alt="affiche gladiator"></div>
    </div>
    <div class="affiche3 affiche-cacher">
      <div class="croix3"></div>
      <div class="slider-for3">
        <div><img src="img/avengers.jpg" alt="affiche avengers">
          <div class="description3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/forrestgump.jpg" alt="affiche forrestgump">
          <div class="description3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/gladiator.jpg" alt="affiche gladiator">
          <div class="description3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/joy.jpg" alt="affiche avengers">
          <div class="description3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/warcraft.jpg" alt="affiche forrestgump">
          <div class="description3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/tueurs.jpg" alt="affiche gladiator">
          <div class="description3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/blade-runner.jpg" alt="affiche avengers">
          <div class="description3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/avatar.jpg" alt="affiche forrestgump">
          <div class="description3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
        <div><img src="img/lone-ranger.jpg" alt="affiche gladiator">
          <div class="description3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br> <input type="submit" id="button-detail" name="" value="Voir les détails">
          </div>
        </div>
      </div>

    </div>
  </div>
</main>
