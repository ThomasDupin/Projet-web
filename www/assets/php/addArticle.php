<?php
require 'db.class.php';
require 'panier.class.php';
$DB=new DB();
$panier = new panier($DB);
?>


<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/boutiquePanier.css" /> 
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>

    <!-- L'en-tête -->    
    <header class="header">
    <?php include("header.php"); ?>                               
    </header>
     <!-- Formulaire qui va nous permettre de rentrer les informations pour ajouter un produit et elles sont envoyées vers la page action.php --> 
    <form method="get" action="actionAdd.php" >
             Ajoutez un article : <br/>
            <textarea name="name" value="name" required></textarea><br/>
            Prix : <br/>
            <textarea name="price" value="price" required></textarea><br/>
            content : <br/>
            <textarea name="content" value="content" required></textarea><br/>
            type d'article : <br/>
            <textarea name="Type" value="Type" required></textarea><br/>
            Disponibilté : <br/>
            <textarea name="Dispo" value="Dispo" required></textarea><br/>
            <input type="submit" name="submit">
           
            
    </form> 


    </body>

</html>
