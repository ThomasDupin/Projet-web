<!DOCTYPE html>
<html>

<head>

    <head>
        <title> modifier un évènement </title>
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
    <div class="py-5 text-left">
        <img class="mx-auto mb-4" src="../img/logo.png" alt="logo">
        <!--instructions pour remplir le formulaire-->
        <h2>Modifier un événement</h2>
        <p class="lead">Suivez les instructions ci-dessus pour modifier un événement. N'oubliez pas de vérifier si vous avez bien complété les champs obligatoires.</p>
    </div>
    <!--formulaire pour modifier un evenement-->
    <form method="post" action="scriptUpdateEvent.php" class="needs-validation was-validated" novalidate="">
        <div class="row">
            <!--Champ ancien nom de l'evenement-->
            <div class="col-md-6 mb-3">
                <label for="firstName">Ancien nom de l'événement</label>
                <input name="titre" type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                    Le nom de l'événement est éxigé.
               </div>
            </div>
            <!--Champ nouveau nom de l'evenement-->
            <div class="col-md-6 mb-3">
                <label for="firstName">Nouveau nom de l'événement</label>
                <input name="newtitre" type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                    Le nom de l'événement est éxigé.
               </div>
            </div>
        </div>
        <!--Champ photo de l'evenement-->
        <p>
           <label>Photo : </label>
            <input name="photo" type="file" class="form-control-file">
        </p>
        <!--Champ prix de l'evenement-->
        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="country">Prix</label>
                <input name="prix" type="text" class="form-control" placeholder="prix" required="">
                <div class="invalid-feedback">
                    Veuillez sélectionner un prix.
                </div>
            </div>
            <!--Champ ancienne date de l'evenement-->
            <div class="col-md-4 mb-3">
                <label for="state">Anienne Date</label>
                <input name="datee" type="date" class="form-control" required="">
                <div class="invalid-feedback">
                    Veuillez sélectionner une date.
                </div>
            </div>
            <!--Champ nouvelle date de l'evenement-->
            <div class="col-md-4 mb-3">
                <label for="state">Nouvelle Date</label>
                <input name="newdatee" type="date" class="form-control" required="">
                <div class="invalid-feedback">
                    Veuillez sélectionner une date.
                </div>
            </div>
            <!--champ avec options multiple reccurence de l'evenement-->
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
        <!--champ description de l'evenement-->
        <hr class="mb-4">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Ajouter une description à l'événement</label>
            <textarea name="commentaire" class="form-control" id="descriptionevent" rows="3"></textarea>
        </div>
        <!--script php permettant d'afficher les messages suite a la modification d'un evenement-->
        <?php
echo $_GET['var'];
?>
        <!--bouton permettant d'envoyer le formulaire-->
        <hr class="mb-4">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Modifier">
    </form>
    <!--footer-->
    <footer>
        <?php include "footer.php"?>
    </footer>
</body>
</html>
