<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/boutiquePanier.css" /> 
        <link rel="stylesheet" href="../vendors/css/bootstrap.min.css">
        <script src="../vendors/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>

    <!-- L'en-tête -->    
    <header class="header">
    <?php include("header.php"); ?>                                 
    </header>
<!-- ici le formulaire pour rentrer les informations pour l'envoie du mail -->
    <form action="contact.php" method="POST">
        
        <label for="inputLastName">Votre nom </label>
        <input type="next" name="lastName" class="form-control" id="inputLastName">  

        <label for="inputFirstName"> Votre Prenom</label>
        <input type="next" name="firstName" class="form-control" id="inputFirstName">

        <label for="inputEmail"> Votre Adresse email</label>
        <input type="next" name="email" class="form-control" id="inputEmail">
        
        <button type="submit" class="btn btn-primary"> Confirmer </button>
          
    </form>
