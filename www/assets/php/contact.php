<?php
/* en utilisant le sendmail.exe on recupere les informations d'un formulaire et on envoie un mail de confirmation d'achats */
$message = 'Bonjour '.$_POST['firstName'].' '. $_POST['lastName'].' votre commande a bien était recu elle sera disponible dans la biblioteque de votre campus d\'ici une semaine, Merci d\'utiliser nos services, aurevoir !';
$headers= 'FROM: projetwebwamp@gmail.com ';
$reciever = $_POST['email'];

mail($reciever,'Commande boutique Bde',$message,$headers);
header("Location:panier.php");
?>
