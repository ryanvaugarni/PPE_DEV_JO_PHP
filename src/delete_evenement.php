<?php
include_once './pdo.php';
var_dump($bdd);
if(isset($_GET['id']) && isset($_GET['idevent']))
{

$_ryan = "ryan";
var_dump($_ryan);
var_dump($_GET['id']);
var_dump($_GET['idevent']);

    $id = (int) $_GET['id'];
    $idevent = (int) $_GET['idevent'];

    $del = $bdd->prepare('DELETE FROM `historique_client` WHERE `historique_client`.idClient = ? AND `historique_client`.id_event = ?');
    $del->execute(array($_GET['id'], $_GET['idevent']));

    header('Location: ../espace_membre.php');
}
else
{
    header('Location: ./espace_membre.php');
}
?>