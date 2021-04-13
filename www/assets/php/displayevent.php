<?php
  require 'db.class.php';
  $DB=new DB();
?>
<!-- dans cette page on va afficher les evennement -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/displayevent.css" />
</head>

<body>
  <header>
    <?php include "header.php" ?>
  </header>
  <!-- Si dessous on a un carousel de bootstrap-->
  <main role="main"></main>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/bdepull.jpg" alt="event1" />
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
          <rect width="100%" height="100%" fill="#777"></rect>
        </svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Nouveau pull du BDE.</h1>
            <p>
              Les nouveaux pull du BDE sont enfin disponible sur la boutique du site ! Profitez-en et commendez-en déjà un sur notre boutique !
            </p>
            <p>
              <a class="btn btn-lg btn-primary" href="#" role="button">Détails</a>
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/bde.png" alt="Logo du Bde" />
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
          <rect width="100%" height="100%" fill="#777"></rect>
        </svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Rejoins-nous.</h1>
            <p>
              Si ce n'est pas encore fait vous pouvez nous rejoindre en vous inscrivant sur le site et profiter de tout les avantages d'être membre du BDE !
            </p>
            <p>
              <a class="btn btn-lg btn-primary" href="#" role="button">Inscrivez-vous</a>
            </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/ski.jpg" alt="ski" />
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
          <rect width="100%" height="100%" fill="#777"></rect>
        </svg>
        <div class="container">
          <div class="carousel-caption text-right">
          <h1>Nous organisons de nombreux événement.</h1>
            <p>
            Retrouver tous les événementsur cette pages, et vous aussi vous pouvez créer votre propre événement en suivant le formulaire. 
            </p>
            <p>
              <a class="btn btn-lg btn-primary" href="#" role="button">Créer ton événement !</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- ici on appel le fichier php qui va s'occuper de l'affichage -->
  <?php require("eventDynamique.php") ?>
</body>

</html>

