<?php
    require 'db.class.php';
    $DB=new DB();
/* On appel la procedure pour ajouter un utilisateur à une manifestation */
    $query = $DB->db->prepare('CALL insertInscription(:_id_event,:_id_user)');
    $query->bindValue(':_id_event', $_GET['id_event'], PDO::PARAM_STR);
    $query->bindValue(':_id_user', $_GET['id_user'], PDO::PARAM_STR);
    $query->execute();
    header("Location:displayevent.php");
?>
