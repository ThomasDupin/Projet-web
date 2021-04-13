<?php
#connexion a la base de donnée
$bdd = new PDO('mysql:host=localhost;dbname=cesi_bde;charset=utf8', 'root', '');

session_start();
#recuperation des parametres par le biais de la methode post
$email = $_POST['email'];
$motDePasse = $_POST['motDePasse'];
#test si une session est active
if (isset($_SESSION['user_name'])) {
    #revoie vers la page index
    header('Location: ../../index.php');
    exit();
} else {
    #prepare la requete permettant de voir si les données entrée sont bonnes
    $requete = $bdd->prepare('SELECT Prenom AS membre_valide FROM utilisateurs WHERE `Email` = :email AND `Mot_de_passe` = :motDePasse');
    #sécurisation des parametres
    $requete->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $requete->bindValue(':motDePasse', $_POST['motDePasse'], PDO::PARAM_STR);
    #execution de la requete
    $requete->execute();
    $data = $requete->fetch();
    $requete->closeCursor();
    #test si l'utilisateur est bien dans la base de donnée
    if ($data['membre_valide'] != '') {
        $_SESSION['user_name'] = $data['membre_valide'];
        #créé un objet avec l'email de l'utilisateur
        $objet = (object) [
            "email" => $_POST['email'],
        ];
        $_SESSION['email'] = $objet;
        #revoie vers la page index
        header('Location: ../../index.php');
        exit();
    } else {
        #revoie un message d'erreur vers la page connexion par le biais de la methode get
        $var = "Mot de passe et / ou email incorrect.";
        header('location:connexion.php?var=' . $var);
        exit();
    }
}
