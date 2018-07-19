<?php session_start();


        $_SESSION['prenom'] = $_POST['prenom'];


              if(isset($_SESSION["prenom"]) && $_SESSION["prenom"] != ""){
              header('location:menu.php');
            }else {
              header('location:index.php');
            }

?>
