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

  <title>VOD Métropolis</title>
</head>

<body>
  <header>
    <?php
    include("includes/header.html");
     ?>
  </header>

  <div class="container">
    <?php
    include("includes/nav.php");

    include("includes/carousel.php");
    ?>

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
