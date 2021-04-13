<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

    <body>
        <header>
            <?php include "./assets/php/header.php";?>
        </header>
        <main>
            <div class = "evenement"> Les évènements </div>
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/bde.png" class="d-block w-100" alt="Première activité">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class = "color">Bienvenue sur le site du BDE</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/bdepull.jpg" class="d-block w-100" alt="Seconde activité">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class = "color">Nouveau pull du BDE</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/ski.jpg" class="d-block w-100" alt="Troisième activité">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class = "color">Week-end au SKI</h5>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </div>
                <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src=                            
                    <?php
                        $bdd = new PDO('mysql:host=localhost;dbname=cesi_bde;charset=utf8', 'root', '');
                        $req = $bdd->prepare('CALL SelectImage (:type)');
                        $req->bindValue(':type', "Pull", PDO::PARAM_STR);
                        $req->execute();
                        $image_prod = $req->fetchAll();
                        foreach ($image_prod as $image) {
                            echo $image['image'];
                        }
                    ?> alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectTitre (:type)');
                                $req->bindValue(':type', "Pull", PDO::PARAM_STR);
                                $req->execute();
                                $title_prod = $req->fetchAll();
                                foreach ($title_prod as $title) {
                                    echo $title['Libelle'];
                                }
                            ?>
                        </h5>
                        <p class="card-text">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectDescription (:type)');
                                $req->bindValue(':type', "Pull", PDO::PARAM_STR);
                                $req->execute();
                                $desc_prod = $req->fetchAll();
                                foreach ($desc_prod as $desc) {
                                    echo $desc['Description'];
                                }
                            ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="./assets/php/boutique.php" class="btn btn-primary">Aller à la boutique</a>
                    </div>
                </div>
                <div class="card">
                <img class="card-img-top" src=                            
                <?php
                    
                    $req = $bdd->prepare('CALL SelectImage (:type)');
                    $req->bindValue(':type', "Clés usb", PDO::PARAM_STR);
                    $req->execute();
                    $image_prod = $req->fetchAll();
                    foreach ($image_prod as $image) {
                        echo $image['image'];
                    }
                ?> alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectTitre (:type)');
                                $req->bindValue(':type', "Clés usb", PDO::PARAM_STR);
                                $req->execute();
                                $title_prod = $req->fetchAll();
                                foreach ($title_prod as $title) {
                                    echo $title['Libelle'];
                                }
                            ?>
                        </h5>
                        <p class="card-text">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectDescription (:type)');
                                $req->bindValue(':type', "Clés usb", PDO::PARAM_STR);
                                $req->execute();
                                $desc_prod = $req->fetchAll();
                                foreach ($desc_prod as $desc) {
                                    echo $desc['Description'];
                                }
                            ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="./assets/php/boutique.php" class="btn btn-primary">Aller à la boutique</a>
                    </div>
                </div>
                <div class="card">
                <img class="card-img-top" src=                            <?php
                    
                    $req = $bdd->prepare('CALL SelectImage (:type)');
                    $req->bindValue(':type', "Décapsuleur", PDO::PARAM_STR);
                    $req->execute();
                    $image_prod = $req->fetchAll();
                    foreach ($image_prod as $image) {
                        echo $image['image'];
                    }
                ?> alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectTitre (:type)');
                                $req->bindValue(':type', "Décapsuleur", PDO::PARAM_STR);
                                $req->execute();
                                $title_prod = $req->fetchAll();
                                foreach ($title_prod as $title) {
                                    echo $title['Libelle'];
                                }
                            ?>
                        </h5>
                        <p class="card-text">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectDescription (:type)');
                                $req->bindValue(':type', "Décapsuleur", PDO::PARAM_STR);
                                $req->execute();
                                $desc_prod = $req->fetchAll();
                                foreach ($desc_prod as $desc) {
                                    echo $desc['Description'];
                                }
                            ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="./assets/php/boutique.php" class="btn btn-primary">Aller à la boutique</a>
                    </div>
                </div>
                <div class="card-deck">
                <div class="card">
                <img class="card-img-top" src=                            
                <?php
                    
                    $req = $bdd->prepare('CALL SelectImage (:type)');
                    $req->bindValue(':type', "Porte clés", PDO::PARAM_STR);
                    $req->execute();
                    $image_prod = $req->fetchAll();
                    foreach ($image_prod as $image) {
                        echo $image['image'];
                    }
                ?> alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectTitre (:type)');
                                $req->bindValue(':type', "Porte clés", PDO::PARAM_STR);
                                $req->execute();
                                $title_prod = $req->fetchAll();
                                foreach ($title_prod as $title) {
                                    echo $title['Libelle'];
                                }
                            ?>
                        </h5>
                        <p class="card-text">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectDescription (:type)');
                                $req->bindValue(':type', "Porte clés", PDO::PARAM_STR);
                                $req->execute();
                                $desc_prod = $req->fetchAll();
                                foreach ($desc_prod as $desc) {
                                    echo $desc['Description'];
                                }
                            ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="./assets/php/boutique.php" class="btn btn-primary">Aller à la boutique</a>
                    </div>
                </div>
                <div class="card">
                <img class="card-img-top" src=                            
                <?php
                    
                    $req = $bdd->prepare('CALL SelectImage (:type)');
                    $req->bindValue(':type', "Tee-shirts", PDO::PARAM_STR);
                    $req->execute();
                    $image_prod = $req->fetchAll();
                    foreach ($image_prod as $image) {
                        echo $image['image'];
                    }
                ?> alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectTitre (:type)');
                                $req->bindValue(':type', "Tee-shirts", PDO::PARAM_STR);
                                $req->execute();
                                $title_prod = $req->fetchAll();
                                foreach ($title_prod as $title) {
                                    echo $title['Libelle'];
                                }
                            ?>
                        </h5>
                        <p class="card-text">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectDescription (:type)');
                                $req->bindValue(':type', "Tee-shirts", PDO::PARAM_STR);
                                $req->execute();
                                $desc_prod = $req->fetchAll();
                                foreach ($desc_prod as $desc) {
                                    echo $desc['Description'];
                                }
                            ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="./assets/php/boutique.php" class="btn btn-primary">Aller à la boutique</a>
                    </div>
                </div>
                <div class="card">
                <img class="card-img-top" src=                            
                <?php
                    
                    $req = $bdd->prepare('CALL SelectImage (:type)');
                    $req->bindValue(':type', "Mugs", PDO::PARAM_STR);
                    $req->execute();
                    $image_prod = $req->fetchAll();
                    foreach ($image_prod as $image) {
                        echo $image['image'];
                    }
                ?> alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectTitre (:type)');
                                $req->bindValue(':type', "Mugs", PDO::PARAM_STR);
                                $req->execute();
                                $title_prod = $req->fetchAll();
                                foreach ($title_prod as $title) {
                                    echo $title['Libelle'];
                                }
                            ?>
                        </h5>
                        <p class="card-text">
                            <?php
                                
                                $req = $bdd->prepare('CALL SelectDescription (:type)');
                                $req->bindValue(':type', "Mugs", PDO::PARAM_STR);
                                $req->execute();
                                $desc_prod = $req->fetchAll();
                                foreach ($desc_prod as $desc) {
                                    echo $desc['Description'];
                                }
                            ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="./assets/php/boutique.php" class="btn btn-primary">Aller à la boutique</a>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php include "./assets/php/footer.php";?>
        </footer>
    </body>
</html>
