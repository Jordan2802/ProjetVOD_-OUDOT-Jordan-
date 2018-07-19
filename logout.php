<?php
$_SESSION["prenom"] = NULL;

	session_destroy();

	header("location: index.php");
 ?>
