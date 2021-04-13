<!DOCTYPE html>
<html lang="fr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/footer.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/www/assets/css/cookie-bandeau.css">
  <meta charset="utf-8" />
  <title>Footer</title>
</head>
<?php
  #verifie si le cookie existe et l'affiche.
if (isset($_COOKIE['accept_cookie'])) {
    $showcookie = false;
} else {
    $showcookie = true;
}
?>
<!--affiche le cookie-->
<?php if ($showcookie) {?>
  <div class="cookie-alert">
     En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour vous proposer des contenus et services adaptés à vos centres d’intérêts.<br /><a href="/www/assets/php/accept_cookie.php">OK</a>
  </div>
  <?php }?>
<!--footer-->
<footer>
  <!--navbar ou seront affichés tout les éléments du footer-->
  <nav class="navbar navbar-dark bg-dark">
    <ul class="nav logo">
      <!--bouton renvoyant vers linkedin-->
      <li class="nav-item">
        <div class="btn-group mr-2 reseau" role="group">
          <a class="btn btn-outline-info" href="https://www.linkedin.com/school/cesiecoledingenieurs/">
            <i class="fa fa-linkedin"></i></a>
        </div>
      </li>
      <!--bouton renvoyant vers facebook-->
      <li class="nav-item">
        <div class="btn-group mr-2 reseau" role="group">
          <a class="btn btn-outline-info" href="https://www.facebook.com/CESIingenieurs/">
            <i class="fa fa-facebook-f"></i></a>
        </div>
      </li>
      <!--bouton renvoyant vers viadeo-->
      <li class="nav-item">
        <div class="btn-group mr-2 reseau" role="group">
          <a class="btn btn-outline-info" href="http://www.viadeo.com/fr/company/ei-cesi">
            <i class="fa fa-viadeo"></i></a>
        </div>
      </li>
      <!--bouton renvoyant vers twitter-->
      <li class="nav-item">
        <div class="btn-group mr-2 reseau" role="group">
          <a class="btn btn-outline-info" href="https://twitter.com/CESIingenieurs">
            <i class="fa fa-twitter"></i></i></a>
        </div>
      </li>
    </ul>
  <!--bouton renvoyant vers la page des mentions legales-->
    <div class="btn-group mr-2" role="group">
      <a class="btn btn-outline-info mention" href="/www/assets/php/mentions_legales.php">Mentions légales</a>
    </div>
  </nav>
</footer>
</html>
