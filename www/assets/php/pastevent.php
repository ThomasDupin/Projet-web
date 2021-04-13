<!DOCTYPE html>
<html>

<head>

    <head>
        <title> Supprimer un évènement </title>
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
    <div class="container bouton">
        <div class="py-5 text-left">
            <img class="mx-auto mb-4" src="../img/logo.png" alt="logo">
            <!--instructions pour remplir le formulaire-->
            <h2>événement passé</h2>
            <p class="lead">Suivez les instructions ci-dessus pour changer un evenement en passé. N'oubliez pas de vérifier si vous avez bien complété les champs obligatoires.</p>
        </div>
        <div class="row">
            <div class="col-md-8 order-md-1">
                <!--formulaire pour mettre un evenement en passé-->
                <form method="post" action="scriptEvenementPasse.php" class="needs-validation was-validated" novalidate="">
                    <div class="row">
                        <!--Champ nom de l'evenement-->
                        <div class="col-md-6 mb-3">
                            <label>Nom de l'événement</label>
                            <input name="titre" type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Le nom de l'événement est éxigé.
                            </div>
                        </div>
                    </div>
                    <!--Champ date de l'evenement-->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Date de l'événement</label>
                            <input name="date" type="date" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                La date de l'événement est éxigé.
                            </div>
                        </div>
                    </div>
                    <!--Script php permettant d'afficher un message que revoie l'interpretation du formulaire-->
                    <?php
echo $_GET['var'];
?>
                    <hr class="mb-4">
                    <!--bouton permettant d'envoyer le formulaire-->
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="passer">
                </form>
            </div>
        </div>
    </div>
    <!--footer-->
      <footer>
           <?php include "footer.php"?>
      </footer>
</body>
</html>
