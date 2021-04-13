<?php
require 'db.class.php';
$DB=new DB();


/* On appel la procedure pour ajouter un commentaire avec les informations du formulaire */

$query = $DB->db->prepare('CALL insertComment(:_content,:_id_user,:_id_event)');
  $query->bindValue(':_content', $_GET['content'], PDO::PARAM_STR);
  $query->bindValue(':_id_user', $_GET['id_user'], PDO::PARAM_STR);
  $query->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
  $query->execute();
  header("Location:displayevent.php");
?>
