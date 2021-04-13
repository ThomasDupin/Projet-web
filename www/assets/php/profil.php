<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profil</title>
</head>
<body>
    <!--include du header-->
<?php include "header.php";?>

<?php
//Connexion à la BDD
session_start();
if (isset($_SESSION['user_name'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=cesi_bde;charset=utf8', 'root', '');
    $email = (array) $_SESSION['email'];
//Requête et exécution
    $requete = $bdd->prepare("CALL profil(:email)");
    $requete->bindValue(':email', $email['email'], PDO::PARAM_STR);
    $requete->execute();
    $profil = $requete->fetchAll();
    $a = 0;
//Affiche les données de ton profil stockées dans la BDD
    foreach ($profil as $profil_content) {
        while ($a < 6) {
            echo $profil_content[$a] . ' ';
            $a += 1;
        }
        //Affiche les différentes possibilités en fonction de ton rôle
        switch ($profil_content['role']) {
            case "etudiant":
                break;
            case "membre du BDE":
                echo '<br><a href="createevent.php?var=">Creer evenement</a> |
            <a href="delevent.php?var=">Supprimer evenement</a> |
            <a href="updateevent.php?var=">Modifier evenement</a> |
            <a href="pastevent.php?var=">Mettre un evenement passé</a> |
            <a href="liste_participant.php">Liste des participants</a>';
                break;
            case "membre du personnel":
                echo '<br><a href="change_statut.php?var=">Rendre un evenement privé</a> |
            <a href="telecharger_photo.php">Telecharger photo</a>';
                break;
        }
    }
    #affiche un lien vers la page profil et la page deconnexion
    echo '<div class="lienHeader"> <h5><a href="/www/assets/php/deconnexion.php">Deconnexion</a></h5></div>';
} else {
    #affiche un lien vers la page de connexion et d'inscription
    echo '
    <div class="lienHeader">
    <h5> <a href="/www/assets/php/connexion.php?var=">Connexion</a> | <a href="/www/assets/php/inscription.php?var=">Inscription</a> </h5>
    </div>';
}

?>
    <!--include du footer-->
<?php include "footer.php";?>
</body>
</html>
