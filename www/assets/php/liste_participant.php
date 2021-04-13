<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des participants à chaque activité</title>
</head>
<body>
    <?php
    //Connexion à la BDD, appel de la procédure ainsi qu'éxecution de la requête
$bdd = new PDO('mysql:host=localhost;dbname=cesi_bde;charset=utf8', 'root', '');
$req = $bdd->prepare('CALL listeParticipant ()');
$req->execute();
$liste_part = $req->fetchAll();
//Affichage de la requête
foreach ($liste_part as $liste) {
    echo $liste['Prenom'] . " | ";
    echo $liste['Nom'] . " | ";
    echo $liste['Email'] . " ";
    echo $liste['Manifestation'] . " ";
    echo '<br>';
}
?>
<p>
    <a href="download_participant.php" class="btn btn-info">Télécharger en CSV</a>
</p>
</body>
</html>
