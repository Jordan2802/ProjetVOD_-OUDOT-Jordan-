<!--
###########################################
############ PDO-Extension #############
###########################################
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

$reponse = $dbh->query('SELECT * FROM genre WHERE titre_film = "avatar" ');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>ID genre</strong> : <?php echo $donnees['ID_genre']; ?><br />
    genres : <?php echo $donnees['genre']; ?><br />
    film : <?php echo $donnees['titre_film']; ?><br />
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
