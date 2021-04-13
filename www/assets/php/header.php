<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/assets/css/header.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <!--Mise en place d'une nav bar qui nous servira de support sur ce que l'on voudra ajouter dessus-->
            <nav class="navbar navbar-expand-md navbar-light fixed-sticky" style="background-color: #6684BD;">
                <img src="/www/assets/img/logoo.png" width="75" height="75" class="d-inline-block align-top" alt="logoBde">
                <a class="navbar-brand titre" href="/www/index.php">BDECESI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--Mise en place d'une liste d'élément qui permettre d'acceder à différente page du site -->
                <div class="collapse navbar-collapse link" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="list-inline-item">
                            <a class="nav-link" href="/www//index.php">Accueil</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="nav-link" href="/www/assets/php/boutique.php">Boutique</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="nav-link" href="/www/assets/php/displayevent.php">Evénement</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="nav-link" href="/www/assets/php/panier.php">Panier</a>
                        </li>
                    </ul>
                    <!--Input ou l'on pourra a partir de la nav bar rechercher ce que l'on voudra sur le site-->
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Recherche..." aria-label="Recherche">
                        <button class="btn btn-dark my-2 my-sm-0" type="button">Rechercher</button>
                        <a href="/www/assets/php/profil.php">Profil</a>
                    </form>
                </div>
            </nav>
        </header>
    </body>
</html>
