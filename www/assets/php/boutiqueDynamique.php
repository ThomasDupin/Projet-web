<?php
/* dans cette page on recupere le type de produit ainsi que la valeur de prix que on a entrée si on en a mit une */
/* Ensuite on a 3 possibilitées differente et donc a chaque possibilitées on a une requete  */
/* et dans le foreach a chaque fois que on recupere un id on affiche une carte boostsrap avec les champs de la bdd*/
if(isset($_GET['param']) && empty($_GET['cost'])){
$query = $DB->db->prepare('CALL display_product_type_sort(:product_type)');
$query->bindValue(':product_type',$_GET['param'],PDO::PARAM_STR);
$query->execute();
$produits = $query->fetchAll();
}else if (isset($_GET['param']) && isset($_GET['cost'])){
    $query = $DB->db->prepare('CALL display_product_cost_sort(:product_type,:product_cost)');
    $query->bindValue(':product_type',$_GET['param'],PDO::PARAM_STR);
    $query->bindValue(':product_cost',$_GET['cost'],PDO::PARAM_STR);
    $query->execute();
    $produits = $query->fetchAll();    
}else if (empty($_GET['param']) && isset($_GET['cost'])){
    $query = $DB->db->prepare('CALL display_product_cost(:product_cost)');
    $query->bindValue(':product_cost',$_GET['cost'],PDO::PARAM_STR);
    $query->execute();
    $produits = $query->fetchAll();  
}
            foreach ( $produits as $produit): 

                    echo "<article class=\"col-md-4 col-lg-4 col-xs-12 col-sm-12 item\">
                        <div class=\"card\" style=\"width: 18rem;\">
                            <img src='../img/". $produit['image'] .".jpg' class=\"card-img-top\" alt=\"Image\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">" . $produit['Libelle'] . " </h5>
                                    <h6 class=\"card-title\">Disponible ? :" . $produit['Disponibilite'] . "</h6>
                                    <p class=\"card-text\">" . $produit['Description'] . "</p>
                                    <a href=\"addpanier.php?id_Produits= " . $produit['id_Produits'] . " class=\"btn btn-primary\">" . $produit['Prix'] . "€ - Ajoutez au panier ! </a>
                                </div>
                        </div>   
                    </article>";
            endforeach;  ?>
