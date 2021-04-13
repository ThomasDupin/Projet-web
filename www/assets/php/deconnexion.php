<?php
session_start();
# test si une session est active
if (isset($_SESSION['user_name'])) {
    # Détruit toutes les variables de session
    session_unset();
    # Détruit la session.
    session_destroy();
    # Revoie vers la page index
    header('Location: ../../index.php');
    exit();
} else {
    # Renvoie vers la page de connexion
    echo 'Vous n\'étiez pas connecté.<br>';
    echo '<a href="connexion.php">connexion</a>';
}
