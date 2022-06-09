<?php

// code qui permet de séléctionner les données de l'evevement dans la base de données pour savoir si l'évènement est dispo ou non

include_once './src/pdo.php';

if (isset($_GET["id_event"]) && isset($_SESSION["id"])) {
    // print_r("Id de l'event  ".$_GET["id_event"]);
    // print_r("Id de l'user   ".$_SESSION["id"]);

    // print_r($_SESSION["id"]);
    $_idEvenement = $_GET["id_event"];
    $_date = new DateTime();
    $_date = $_date->format('Y-m-d H:i:s');
    $_idClient = $_SESSION['id'];

    $q = $bdd->prepare("SELECT * FROM historique_client WHERE `id_event` = :id_event AND `idClient` = :idClient");
    $q->execute(array('idClient' => $_idClient,
                      'id_event' => $_idEvenement
    ));
    if ($q->rowCount() == 0)
    {
        echo "<p class=\"success\">L'evenement est disponible</p>";
    $resq = $bdd->prepare("INSERT INTO historique_client (`idClient`, `id_event`, `date_consultation`) VALUES (:idClient, :id_event, :date_consultation)");
    $resq -> execute(array(
        'idClient' => $_idClient,
        'id_event' => $_idEvenement,
        'date_consultation' => $_date

    ));
}
else
{
    echo "<p class=\"warning\">Vous êtes déjà inscrit à cet évènement</p>";
}}

?>