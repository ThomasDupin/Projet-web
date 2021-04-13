<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/connexionInscription.css" />
    <link rel="stylesheet" href="../css/connexion.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>connexion</title>
</head>
<!--header-->
<header>
    <?php include "header.php";?>
</header>
<body id = page>
    <section id = cadre>
        <!--formulaire pour changer se connecter-->
        <form method="post" action="scriptConnexion.php" autocomplete="on">
            <h1 id = titre> Connexion </h1>
            <!--Champ email-->
            <p>
                <label>Email : </label>
                <input class="form-control" name="email" required="required" type="email" placeholder="email" />
            </p>
            <!--Champ mot de passe-->
            <p>
                <label>Mot de passe : </label>
                <input class="form-control" name="motDePasse" required="required" type="password" placeholder="mot de passe"/>
            </p>
            <!--bouton permettant d'envoyer le formulaire-->
            <p>
                <input class="btn btn-dark" type="submit" value="Connexion"/>
            </p>
        </form>
        <!--Script php permettant d'afficher les messages d'erreur-->
        <p id=erreur>
            <?php
echo $_GET['var'];
?>
        </p>
        <p>
            <!--bouton qui renvoie vers la page d'inscription-->
            <label>Pas encore inscrit ?</label>
            <a class="btn btn-warning" href="inscription.php?var=" role="button">Inscription</a>
        </p>
    </section>
</body>
    <!--Footer-->
<footer>
    <?php include "footer.php";?>
</footer>
</html>
