<?php
#connexion a la base de donnée
$bdd = new PDO('mysql:host=localhost;dbname=cesi_bde;charset=utf8', 'root', '');
#recuperation des parametres par le biais de la methode post
$titre = $_POST['titre'];
$commentaire = $_POST['commentaire'];
$date_publication = $_POST['date_publication'];
$prix = $_POST['prix'];
$recurrence = $_POST['recurrence'];
$nom = $_POST['nom'];
$photo = $_POST['photo'];
$date_evenement = $_POST['date_evenement'];
#prepare la requete permettant de creer un evenement
$requete = $bdd->prepare("INSERT INTO manifestations (`Titre`,`Description`,`Date_publication`,`Prix`,`Reccurence`,`Visibilite`,`Status`,`URL`,`id_Utilisateurs`)
VALUES (:titre, :commentaire,:date_publication,:prix,:recurrence,'publique','a venir',:photo,
(SELECT * FROM (SELECT utilisateurs.id_Utilisateurs FROM utilisateurs WHERE utilisateurs.Prenom = :nom)tmp));
INSERT INTO `date`
(date.Date_evenement, date.id_Manifestations)
VALUES (:date_evenement, (SELECT LAST_INSERT_ID() FROM manifestations LIMIT 1));");
#sécurisation des parametres
$requete->bindValue(':titre', $titre, PDO::PARAM_STR);
$requete->bindValue(':commentaire', $commentaire, PDO::PARAM_STR);
$requete->bindValue(':date_publication', $date_publication, PDO::PARAM_STR);
$requete->bindValue(':prix', $prix, PDO::PARAM_STR);
$requete->bindValue(':recurrence', $recurrence, PDO::PARAM_STR);
$requete->bindValue(':nom', $nom, PDO::PARAM_STR);
$requete->bindValue(':photo', $photo, PDO::PARAM_STR);
$requete->bindValue(':date_evenement', $date_evenement, PDO::PARAM_STR);
#execution de la requete
$requete->execute();
$requete->closeCursor();
#revoie un message vers la page createevent par le biais de la methode get
$var = "Evenement ajouté";
header('location:createevent.php?var=' . $var);
exit();