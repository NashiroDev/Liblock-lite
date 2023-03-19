<?php

session_start();

include_once('/app/requests/users.php');

if (!isset($_SESSION['CURRENT_USER']) || !in_array('ROOT_USER', $_SESSION['CURRENT_USER']['roles'])) {
    header("Location:/");
} elseif (!empty($_POST['id']) && !empty($_POST['token']) && $_POST['token'] === $_SESSION['token']) {
    if (deleteUser($_POST['id'])) {
        $_SESSION['message']['success'] = "Utilisateur supprimé avec succès";
    } else {
        $_SESSION['message']['error'] = "Une erreur est survenue, veuillez réessayer";
    }
} else {
    $_SESSION['message']['error'] = "Une erreur est survenue, veuillez réessayer";
}

header("Location:/admin/users");