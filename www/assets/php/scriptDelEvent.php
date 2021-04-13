<?php
#connexion a la base de donnée
$bdd = new PDO('mysql:host=localhost;dbname=cesi_bde;charset=utf8', 'root', '');
#recuperation des parametres par le biais de la methode post
$titre = $_POST['titre'];
$date = $_POST['date'];
#prepare la requete permettant de supprimer un evenement
$requete = $bdd->prepare("DELETE `date`, `manifestations`
    FROM `date` INNER JOIN manifestations ON date.id_Manifestations = Manifestations.id_Manifestations
        WHERE date.id_Date = (SELECT * FROM (SELECT id_Date
            FROM date RIGHT JOIN manifestations ON date.id_Manifestations = manifestations.id_Manifestations
                WHERE date.Date_evenement = :datee AND manifestations.Titre = :titre)tmp);");
#sécurisation des parametres
$requete->bindValue(':titre', $titre, PDO::PARAM_STR);
$requete->bindValue(':datee', $date, PDO::PARAM_STR);
#execution de la requete
$requete->execute();
$requete->closeCursor();
#revoie un message vers la page delevent par le biais de la methode get
$var = "Evenement supprimé";
header('location:delevent.php?var=' . $var);
exit();
