<?php
#connexion a la base de donnée
$bdd = new PDO('mysql:host=localhost;dbname=cesi_bde;charset=utf8', 'root', '');
#recuperation des parametres par le biais de la methode post
$titre = $_POST['titre'];
$commentaire = $_POST['commentaire'];
$datee = $_POST['datee'];
$prix = $_POST['prix'];
$recurrence = $_POST['recurrence'];
$photo = $_POST['photo'];
$newtitre = $_POST['newtitre'];
$newdatee = $_POST['newdatee'];
#prepare la requete permettant de modifier un evenement
$requete = $bdd->prepare("UPDATE manifestations
SET
manifestations.`Titre` = :newtitre,
manifestations.`Description` = :commentaire,
manifestations.`Prix` = :prix,
manifestations.`Reccurence` = :recurrence,
manifestations.`URL` = :photo
WHERE
manifestations.`Titre` = :titre;

UPDATE date
SET date.Date_evenement = :newdatee
WHERE date.id_Date = (SELECT * FROM (SELECT id_Date
          FROM date RIGHT JOIN manifestations ON date.id_Manifestations = manifestations.id_Manifestations
              WHERE date.Date_evenement = :datee AND manifestations.Title = :newtitre)tmp);");
#sécurisation des parametres
$requete->bindValue(':titre', $titre, PDO::PARAM_STR);
$requete->bindValue(':commentaire', $commentaire, PDO::PARAM_STR);
$requete->bindValue(':datee', $datee, PDO::PARAM_STR);
$requete->bindValue(':prix', $prix, PDO::PARAM_STR);
$requete->bindValue(':recurrence', $recurrence, PDO::PARAM_STR);
$requete->bindValue(':photo', $photo, PDO::PARAM_STR);
$requete->bindValue(':newtitre', $newtitre, PDO::PARAM_STR);
$requete->bindValue(':newdatee', $newdatee, PDO::PARAM_STR);
#execution de la requete
$requete->execute();
$requete->closeCursor();
#revoie un message vers la page pastevent par le biais de la methode get
$var = "Evenement modifié";
header('location:updateevent.php?var=' . $var);
exit();
