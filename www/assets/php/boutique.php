<?php
    require 'db.class.php';
    require 'panier.class.php';
    $DB=new DB();
    $panier = new panier($DB);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/boutiquePanier.css" /> 
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>

    <!-- L'en-tête -->
    <header class="header">
        <?php include("header.php"); ?>                               
    </header>
                                   
    <div class="card text-center">
        <div class="card-header">
            Notre boutique !
        </div>
        <!-- Dans cette div on a tous nos types d'article pour pouvoir ensuite faire des requetes par type de produits -->
        <div class="card-body">
            <h5 class="card-title">Tous nos types d'articles</h5>
            <p class="card-text">Choisissez le type d'article que vous voulez voir :</p>
                <form method="get" action="boutique.php">
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="param" value="pull">
                    <label class="form-check-label" for="inlineRadio1">Pull</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="param" value="usb">
                    <label class="form-check-label" for="inlineRadio1">Clés usb</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="param" value="Décap">
                    <label class="form-check-label" for="inlineRadio1">Décapsuleur</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="param" value="porte_clé">
                    <label class="form-check-label" for="inlineRadio1">Porte clés</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="param" value="tee-shirt">
                    <label class="form-check-label" for="inlineRadio1">Tee-shirts</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="param" value="mugs">
                    <label class="form-check-label" for="inlineRadio1">Mugs</label>
                </div>
                    <input type="submit" value="Recharger">
                    <input type="input" name="cost" >
                </form>
            <!-- lien de nav vers les fonctionnalités de suppression ou d'ajout d'article -->
                <a class="nav-link" href="delArticle.php">Supprimer un article</a>
                <a class="nav-link" href="addArticle.php">Ajoutez un article</a>
            </div>
        <!-- si dessous on verifie juste que on les bon parametre pour appeler notre page php dans laquelle on aura fait toutes les requetes -->
            <?php 
                if (isset($_GET['param'])||isset($_GET['cost']))
                {
                    include("boutiqueDynamique.php");
                } 
            ?>
        </div>
    </div>

    </body>

</html>

