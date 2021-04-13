<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/connexionInscription.css" />
    <link rel="stylesheet" href="../css/inscription.css" />
   <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>inscription</title>
</head>
<!--header-->
<header>
    <?php include "header.php";?>
</header>
<body id = page>
    <section id = cadre>
        <!--formulaire pour l'inscription-->
        <form  method="post" action="scriptInscription.php" autocomplete="on">
            <h1 id = titre> Inscription </h1>
            <!--champ prenom-->
            <p>
                <label>Prenom : </label>
                <input class="form-control" name="prenom" required="required" type="text" placeholder="prenom" />
            </p>
            <!--champ nom-->
            <p>
                <label>Nom : </label>
                <input class="form-control" name="nom" required="required" type="text" placeholder="nom" />
            </p>
            <!--champ email-->
            <p>
                <label>Email : </label>
                <input class="form-control" name="email" required="required" type="email" placeholder="email" />
            </p>
            <!--champ mot de passe avec les conditions à respecter-->
            <p>
                <label>Mot de passe :* </label>
                <input class="form-control" name="motDePasse" required="required" type="password" placeholder="mot de passe"/>
            </p>
            <p>*Mettre au minimum 6 caractères dont une majuscule et un chiffre.</p>
            <!--champ adresse-->
            <p>
                <label>Adresse : </label>
                <input class="form-control" name="adresse" required="required" type="text" placeholder="adresse" />
            </p>
            <!--champ photo de profil-->
            <p>
                <label>Photo de profil : </label>
                <input name="photo" type="file" class="form-control-file">
            </p>
            <!--champ avec options multiple campus-->
            <p>
                <label>Campus : </label>
                <select name="campus" required="required" placeholder="campus" class="form-control">
                    <option>Campus</option>
                    <option>Bordeaux</option>
                    <option>Nancy</option>
                    <option>Rouen</option>
                    <option>Strasbourg</option>
                </select>
            </p>
            <!--champ avec options multiple statut-->
            <p>
                <label>Statut : </label>
                <select name="statut" required="required" placeholder="campus" class="form-control">
                    <option>Statut</option>
                    <option>etudiant</option>
                    <option>membre du BDE</option>
                    <option>membre du personnel</option>
                </select>
            </p>
            <!--champ mot de passe statut avec condition à respecter-->
            <p>
                <label>Mot de passe statut* : </label>
                <input class="form-control" name="MdpStatut" type="password" placeholder="Mot de passe statut" />
            </p>
            <p>*Ne rien mettre si vous êtes étudiant.</p>
            <!--case à cocher permettant de verifier si l'utilisateur accepte les mentions légales-->
            <p>
                <input name="mention" type="checkbox" class="form-check-input">
                <label class="form-check-label">J'ai lu et j'accepte les conditions d'utilisations dans les mentions légales.</label>
            </p>
            <!--bouton permettant d'envoyer le formulaire-->
            <p>
                <input class="btn btn-dark" type="submit" value="S'inscrire"/>
            </p>
        </form>
        <!--script php permettant d'afficher les erreurs d'inscription-->
        <p id=erreur>
            <?php
echo $_GET['var'];
?>
        </p>
        <!--bouton revoyant vers la page de connexion-->
        <p>
            <label>Déjà inscrit ?</label>
            <a class="btn btn-warning" href="connexion.php?var=" role="button">Connexion</a>
        </p>
    </section>
</body>
<!--footer-->
<header>
    <?php include "footer.php";?>
</header>
</html>
