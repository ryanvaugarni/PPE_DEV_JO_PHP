<?php 
    include_once './src/pdo.php';
    
    $_idUser = $_SESSION['id'];
    $_req = $bdd->prepare("SELECT nom_evenement, desc_evenement, date_consultation 
    FROM historique_client 
    INNER JOIN evenement ON historique_client.id_event = evenement.id_event 
    WHERE historique_client.idClient = :idUser
    GROUP BY nom_evenement ORDER BY historique_client.date_consultation DESC LIMIT 5");
    $_req -> execute(array(
        'idUser' => $_idUser
    ));
    // if ($_req->rowCount()>0)
    // {
    //     $_donnees = $_req->fetchAll();
    //     foreach ($_donnees as $_history) 
    //     {
    //         print
    //         '<h2> Voici vos inscriptions : </h2>' 
    //         .'<br>'.
    //             '<table>'
    //                 .'<tr>'
    //                     .'<th>Evenement</th>'
    //                     .'<th>Date Inscription</th>'
    //                     .'<th>Date Evenements</th>'
    //                 .'</tr>'
    //                 .'<tr>'
    //                     .'<td>'.$_history['nom_evenement'].'</td>'
    //                     .'<td>'.$_history['desc_evenement'].'</td>'
    //                     .'<td>'.$_history['date_consultation'].'</td>'
    //                 .'</tr>'
    //             .'</table>';
    //     }
    // }
    
           

    echo "<h2Voici vos inscriptions :></h2>";
    echo "<br>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Evenement</th>";
    echo "<th>Date Inscription</th>";
    echo "<th>Date Evenements</th>";
    echo "</tr>";
    if ($_req->rowCount()>0){
        $_donnees = $_req->fetchAll();
        foreach ($_donnees as $_history) 
        {   
            echo "<tr>";
            echo "<td>".$_history['nom_evenement']."</td>";
            echo "<td>".$_history['desc_evenement']."</td>";
            echo "<td>".$_history['date_consultation']."</td>";
            echo "</tr>";
        }
    }
        else{
            print "<p class='warning'>Vous vous êtes inscrit à aucun évènement </p>";

        }
    
    echo "</table>";
?>