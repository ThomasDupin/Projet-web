<?php
    require 'db.class.php';
    $DB=new DB();
/* On appel la procedure pour ajouter un like à une manifestation*/
    $query = $DB->db->prepare('CALL addLike(:input_likes)');
    $query->bindValue(':input_likes', $_GET['input_like'], PDO::PARAM_STR);
    $query->execute();
    header("Location:displayevent.php");
?>
