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
    <?php 
     /* dans cette page on appel une precodure avec les info d'un formulaire pour delete un produit de notre bdd */
    $query = $DB->db->prepare('CALL display_all_product');
    $query->execute();
    $products = $query->fetchAll();                           
    foreach ( $products as $product): ?>

       
         
        <article class="col-md-4 col-lg-4 col-xs-12 col-sm-12 item">
                        <div class="card" style="width: 18rem;">
                        <img src="../img/<?= $product['image'] ?>" class="card-img-top" alt='Image'>
                                <div class="card-body">
                                <h5 class="card-title">" <?= $product['Type'] ?> " </h5>
                                <p class="card-text"> <?= $product['Description'] ?>  </p>  
                                <form method="get" action="actionDel.php" >
                                    <input type="hidden" name="id_product" value='<?= $product['id_Produits'] ?>'>
                                    <input type="submit" name="submit" value="Supprimer">
                                </form> 
                                </div>
                        </div>   
                    </article>

    <?php endforeach; ?>
                        


    </body>

</html>
