<?php
require 'db.class.php';
require 'panier.class.php';
$DB = new DB();
$panier = new panier($DB);
?>
<?php
if(isset($_GET['del'])){
    $panier->del($_GET['del']);
}
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/boutiquePanier.css" /> 
        <link rel="stylesheet" href="../vendors/css/bootstrap.min.css">
        <script src="../vendors/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>

    <!-- L'en-tête -->    
    <header class="header">
    <?php include("header.php"); ?>                                 
    </header>
    <form method="post" action="panier.php">
    <section class="container-fluid articles">
    
        <div class="Container">
            <h2 id="articles"> Votre panier ! </h2>
            <hr class="separator">
            <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12 panier">
                        <div class="card" style="width: 60%">
                            
                                <div class="card-body">
                                    <h5 class="card-title"> Votre panier :</h5>
                                    <hr class="separator">
                                    <p class="card-text">Total d'articles : <?= $panier->count(); ?>.<br></p>
                                    <p class="card-text">Prix total :<strong> <?= number_format($panier->total(),2,',',' '); ?>€ </strong></p>
                                    <a href="payement.php" class="btn btn-primary">Payer ! </a>
                                    <input type="submit" value="Recalculer le prix">
                                    
                                </div>
                                
                        </div>   
                    </article>
                
            </div>  

            <div class="Panier">

            <?php 
            /* dans cette fonction on va afficher les elements contenue dans le panier */
            $ids = array_keys($_SESSION['panier']);
        
            if(empty($ids)){
                $produits = array();
            }else {
                $produits = $DB->query('SELECT * FROM produits WHERE id_Produits IN ('.implode(',',$ids).')');
            }
           
            foreach($produits as $produit):
    
            ?>

                <div class="card w-75">
                    <div class="card-body">
                        <h5 class="card-title"><?= $produit->Libelle?></h5>
                        <h6 class="card-title"><?= $produit->Prix?> €</h6>
                        <h6 class="card-title">Quantité : <input type="text" name="panier[quantity][<?= $produit->id_Produits; ?>]" value="<?= $_SESSION['panier'][$produit->id_Produits]; ?>"></h6>
                        <p class="card-text"><?= $produit->Description?></p>
                        <img src="../img/<?= $produit->image; ?>.jpg" class="card-img-top" alt="Image pull"  style='height: 20%; width: 20%; object-fit: contain' />
                        <a href="panier.php?del=<?= $produit->id_Produits; ?>" class="btn btn-primary">Supprimer</a>
                    </div>
                </div>
        <?php endforeach ?>
        
                

        </div>
    </div>
    
</section>
</form>
 
</body>

</html>

