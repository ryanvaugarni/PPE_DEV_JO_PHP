<?php
session_start();
include_once "./src/get_history_user.php";
    class User {
        static $_title = "- Maison des ligues - ";
        public $_css = "./css/style.css";
    }

    $_new_css = new User();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPE MAISON DES LIGUES</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./asset/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./asset/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= $_new_css->_css ?>">
</head>