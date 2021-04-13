<?php
#connexion a la base de donnée
$bdd = new PDO('mysql:host=localhost;dbname=cesi_bde;charset=utf8', 'root', '');
#recuperation des parametres par le biais de la methode post
$titre = $_POST['titre'];
$date = $_POST['date'];
#prepare la requete permettant de voir si l'evenement existe
$requete2 = $bdd->prepare("SELECT manifestations.Titre FROM `manifestations` LEFT JOIN date ON manifestations.id_Manifestations = date.id_Manifestations
WHERE `Titre` = :titre AND date.Date_evenement = :datee");
#sécurisation des parametres
$requete2->bindValue(':titre', $titre, PDO::PARAM_STR);
$requete2->bindValue(':datee', $date, PDO::PARAM_STR);
#execution de la requete
$requete2->execute();
$existe = $requete2->fetchAll();
#test si l'evenement est bien dans la base de donnée
foreach ($existe as $existe_content) {
    $titre2 = $existe_content['Titre'];
}
if ($titre2 != '') {
    #prepare la requete permettant de mettre un evenement en "passé"
    $requete = $bdd->prepare("UPDATE `manifestations` LEFT JOIN date ON manifestations.id_Manifestations = date.id_Manifestations
SET `Status` = 'passé'
WHERE `Titre` = :titre AND date.Date_evenement = :datee");
    #sécurisation des parametres
    $requete->bindValue(':titre', $titre, PDO::PARAM_STR);
    $requete->bindValue(':datee', $date, PDO::PARAM_STR);
    #execution de la requete
    $requete->execute();
    $requete->closeCursor();
    #revoie un message vers la page pastevent par le biais de la methode get
    $var = "Evenement passé";
    header('location:pastevent.php?var=' . $var);
    exit();
} else {
    #revoie un message d'erreur vers la page pastevent par le biais de la methode get
    $var = "L'evenement n'existe pas";
    header('location:pastevent.php?var=' . $var);
    exit();
}
