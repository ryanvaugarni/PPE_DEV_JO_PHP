<?php
    include_once './src/pdo.php';

    if (isset($_GET["id_event"]) && isset($_SESSION["id"])) {
        print_r($_GET["id_event"]);
        print_r($_SESSION["id"]);
        $_idEvenement = $_GET["id_event"];
        $_date = new DateTime();
        $_date = $_date->format('Y-m-d H:i:s');
        $_idClient = $_SESSION['id'];

        $bdd = $bdd->prepare("INSERT INTO historique_client (id_client, id_event, date_consultation) VALUES (:id_client, :id_event, :date_consultation)");
        $bdd -> execute(array(
            'date_consultation' => $_date,
            'id_client' => $_idClient,
            'id_event' => $_idEvenement
        ));
    }
?>