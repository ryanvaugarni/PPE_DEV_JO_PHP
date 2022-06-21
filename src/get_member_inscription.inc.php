<?php
session_start();

// code qui permet de récupérer les données d'inscription aux evenements et de les afficher dans un tableau

    include_once './src/pdo.php';
    
    $_idEvent = (int) $_SESSION['idevent'];
    //var_dump($_idEvent);
    $_idUser = $_SESSION['id'];
    //var_dump($_idUser);
    $_req = $bdd->prepare("SELECT nom_evenement, desc_evenement, date_consultation, historique_client.idClient, historique_client.id_event 
                           FROM historique_client 
                           INNER JOIN evenement 
                           ON historique_client.id_event = evenement.id_event 
                           WHERE historique_client.idClient = :idUser
                           GROUP BY nom_evenement 
                           ORDER BY historique_client.date_consultation 
                           DESC LIMIT 5");
    
    // execution dans un tableau pour éviter les injections sql
    $_req -> execute(array(
        'idUser' => $_idUser
    ));
    echo "<h2>Voici vos inscriptions :</h2>";
    echo "<br>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Evenement</th>";
    echo "<th>Description évènement</th>";
    echo "<th>Date d'inscription</th>";
    echo "</tr>";
    if ($_req->rowCount()>0){
        $_donnees = $_req->fetchAll();
        foreach ($_donnees as $_history) 
        {   
            echo "<tr>";
            echo "<td>".$_history['nom_evenement']."</td>";
            echo "<td>".$_history['desc_evenement']."</td>";
            echo "<td>".$_history['date_consultation']."</td>";
            $_id_user = $_history['idClient'];
            $_idevent_user = $_history['id_event'];
            echo "<td><a href=\"src/delete_evenement.php?id=$_id_user&idevent=$_idevent_user\">Supprimer</a></td>";
            // echo "<td><a href='src/delete_evenement.php?id=$_idUser&id_event=".$_idEvent."'>Supprimer</a></td>";
            echo "</tr>";
        }
    }
        else{
            print "<p class='warning'>Vous n'êtes inscrit à aucun évènement </p>";

        }
    
    echo "</table>";
?>