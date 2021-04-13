<?php
#connexion a la base de donnée
$bdd = new PDO('mysql:host=localhost;dbname=cesi_bde;charset=utf8', 'root', '');

#recuperation des parametres par le biais de la methode post
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$motDePasse = $_POST['motDePasse'];
$adresse = $_POST['adresse'];
$photo = $_POST['photo'];
$campus = $_POST['campus'];
$statut = $_POST['statut'];
$MdpStatut = $_POST['MdpStatut'];
$mention = $_POST['mention'];

#prepare la requete permettant de voir si l'utilisateur n'existe pas déjà
$requete2 = $bdd->prepare('SELECT COUNT(`Prenom`) AS membre_valide FROM utilisateurs WHERE `Prenom` = :prenom AND `Nom` = :nom OR `Email` = :email OR `Adresse` = :adresse');
#sécurisation des parametres
$requete2->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$requete2->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$requete2->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$requete2->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
#execution de la requete
$requete2->execute();
$data2 = $requete2->fetch();
$requete2->closeCursor();
#test si l'utilisateur existe déjà
if ($data2['membre_valide'] != 0) {
    $var = "Ce membre existe déjà.";
    header('location:inscription.php?var=' . $var);
    exit();
} else {
    #test si le mot de passe pour le statut est bon
    switch ($statut) {
        case "etudiant":
            break;
        case "membre du BDE":
            if ($MdpStatut == "membre du BDE") {
                break;
            } else {
                $var = "Mot de passe membre du BDE incorrect.";
                header('location:inscription.php?var=' . $var);
                exit();
            }
        case "membre du personnel":
            if ($MdpStatut == "membre du personnel") {
            } else {
                $var = "Mot de passe membre du personnel incorrect.";
                header('location:inscription.php?var=' . $var);
                exit();
            }
        default:
            $var = "Veuillez choisir un statut.";
            header('location:inscription.php?var=' . $var);
            exit();
    }
    #test si l'utilisateur à bien entré un statut
    if ($campus == "Campus") {
        $var = "Veuillez choisir un campus.";
        header('location:inscription.php?var=' . $var);
        exit();
    }
    #test si le mot de passe contient bien au moins 6 caracteres dont une majuscule et un chiffre
    if (preg_match("`^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{6,}$`", $motDePasse));
    else{
        $var = "Mot de passe invalide";
        header('location:inscription.php?var=' . $var);
        exit();
    }
    #test si l'utilisateur a bien coché la case concernant les mentions légales
    if ($mention != "on") {
        $var = "veuillez lire et cochez les cases concernant les mentions légales.";
        header('location:inscription.php?var=' . $var);
        exit();
    }
    #prepare la requete permettant de creer un nouvel utilisateur dans la base de donnée
    $requete = $bdd->prepare("INSERT INTO utilisateurs (`Prenom`,`Nom`,`Email`,`Mot_de_passe`,`Adresse`,`Vignette`,`id_Campus`,`id_Roles`) VALUES (:prenom, :nom, :email,:motDePasse,:adresse, :photo,
(SELECT * FROM (SELECT campus.id_Campus FROM campus WHERE campus.Libelle = :campus)tmp),
(SELECT * FROM (SELECT roles.id_Roles FROM roles WHERE roles.Libelle = :statut)tmp2))");
    #sécurisation des parametres
    $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
    $requete->bindValue(':email', $email, PDO::PARAM_STR);
    $requete->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);
    $requete->bindValue(':adresse', $adresse, PDO::PARAM_STR);
    $requete->bindValue(':photo', $photo, PDO::PARAM_STR);
    $requete->bindValue(':campus', $campus, PDO::PARAM_STR);
    $requete->bindValue(':statut', $statut, PDO::PARAM_STR);
    #execution de la requete
    $requete->execute();
    $requete->closeCursor();
    #revoie vers la page index
    header('Location: ../../index.php');
    exit();
}
