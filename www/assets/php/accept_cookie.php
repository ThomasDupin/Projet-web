<?php
//Cree un cookie pendant un an
setcookie('accept_cookie', true, time() + 365 * 24 * 3600, '/', null, false, true);
//Redirige vers la page precedente grâce à HTTP_REFERER, si la page precedente n'existe pas, redirection vers la racine du site
if (isset($_SERVER['HTTP_REFERER']) and !empty($_SERVER['HTTP_REFERER'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location: index.php');
}
