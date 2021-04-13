<?php
require 'db.class.php';
$DB=new DB();

/* On appel une procedure pour supprimer un produit, avec l'id  que on recupere d'un formulaire pareil */

$query = $DB->db->prepare('CALL delArticle(:_id_product)');
  $query->bindValue(':_id_product', $_GET['id_product'], PDO::PARAM_STR);
  $query->execute();
  header("Location:delArticle.php");
?>
