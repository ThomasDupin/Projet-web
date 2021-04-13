<!DOCTYPE html>
<html>

<head>

    <head>
        <title> Créer un évènement </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="../css/createevent.css" />
        <script type="text/javascript" src="../js/form-validation.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

<body class="bg-light">
 <!--header-->
  <header>
    <?php include "header.php"?>
  </header>
    <!--Emplacement du logo ainsi que du titre du formulaire-->
    <div class="container bouton">
        <div class="py-5 text-left">
            <img class="mx-auto mb-4" src="../img/logo.png" alt="logo">
            <h2>Création d'un nouvel événement</h2>
            <p class="lead">Suivez les instructions ci-dessus pour créer votre propre événement. N'oubliez pas de vérifier si vous avez bien complété les champs obligatoires.</p>
        </div>
        <form method="post" action="scriptEvenement.php" class="needs-validation was-validated" novalidate="">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">Nom de l'événement</label>
                <input name="titre" type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                    Le nom de l'événement est éxigé.
                </div>
            </div>
        </div>
<!--Début du formulaire en mettant en place des input pour les différents demmandes de façon a créer un événement-->
        <div class="mb-3">
            <label for="username">Nom d'utilisateur</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input name="nom" type="text" class="form-control" id="username" placeholder="Nom d'utilisateur" required="">
                <div class="invalid-feedback" style="width: 100%;">
                    Votre nom d'utilisateur est obligatoires.
                </div>
            </div>
        </div>
            <!--Cherche un fichier dans le pc de l'utilisateur-->
        <p>
            <label>Photo : </label>
            <input name="photo" type="file" class="form-control-file">
        </p>
            <div class="row">
            <div class="col-md-5 mb-3">
                <label for="country">Prix</label>
                <input name="prix" type="text" class="form-control" placeholder="prix" required="">
                <div class="invalid-feedback">
                    Veuillez sélectionner un prix.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="state">Date publication</label>
                <input name="date_publication" type="date" class="form-control">
                <div class="invalid-feedback">
                    Veuillez sélectionner une date.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="state">Date evenement</label>
                <input name="date_evenement" type="date" class="form-control">
                <div class="invalid-feedback">
                    Veuillez sélectionner une date.
                </div>
            </div>
                <!--Un selecteur qui permet de choirsir sur l'une des options prédéfinis-->
            <div class="col-md-3 mb-3">
                <label for="zip">Recurrence</label>
                <select name="recurrence" class="custom-select d-block w-100" id="state" required="">
                    <option> Une seule fois</option>
                    <option>Tous les jours</option>
                    <option>Toutes les semaines le lundi</option>
                    <option>Tous les mois</option>
                </select>
                <div class="invalid-feedback">
                    Récurrence exigée.
                </div>
            </div>
        </div>
        <hr class="mb-4">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Ajouter une description à l'événement</label>
            <textarea name="commentaire" class="form-control" id="descriptionevent" rows="3"></textarea>
        </div>
        <?php echo $_GET['var'];?>
        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Enregistrer">
    </form>
<!--Footer-->
    <footer>
        <?php include "footer.php"?>
    </footer>
</body>
</html>
