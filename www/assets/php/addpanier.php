<?php
require 'db.class.php';
require 'panier.class.php';
$DB = new DB();
$panier = new panier($DB);


/* en verifie si on obtient un id de produit ensuite on execute une requete pour recuperer dans la bdd le produit correspondant */

if(isset($_GET['id_Produits'])){
    $produit = $DB->query('SELECT id_Produits from produits WHERE id_Produits=:id_Produits', array('id_Produits' => $_GET['id_Produits']));
    if(empty($produit)){
        die("Id inexistant");
    }
   /* puis on l'ajoute au panier et avec la fonction javascrpit:history.back qui nous permet de revenir sur la page boutique */
   $panier->add($produit[0]->id_Produits);
   die('Le produit a bien été ajouté a votre panier <a href="javascript:history.back()">retourner sur la boutique </a>');
}else{
    die("Panier vide !");
}
?>
