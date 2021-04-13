<?php
//Crée un fichier CSV
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=fichier.csv");
header("Pragma: no-cache");
header("Expires: 0");
//Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=cesi_bde;charset=utf8', 'root', '');
//Appel de la procédure stockée et éxecution
$req = $bdd->prepare('CALL listeParticipant ()');
$req->execute();
//Affichage du résultat de la requête
while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
    echo implode(';', $row) . "\r\n";
}
exit();
