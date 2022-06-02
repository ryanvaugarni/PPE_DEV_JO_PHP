<?php 
    include_once './src/pdo.php';

    $_userID = $_SESSION['id'];
    
    $_req = $bdd->prepare("SELECT id_client, id_event, date_consultation FROM historique_client 
                           INNER JOIN evenement ON date.id_event = evenement.id_event
                           WHERE date.id_client = :id
                           GROUP BY nom_evenement
                           ORDER BY date.date_consultation DESC LIMIT 5");
    $_req -> execute(array(
        'idUser' => $_userID
    ));
    if ($_req)
    {
        $_donnees = $_req->fetchAll();
        foreach ($_donnees as $_user) 
        {
            print
            '<h2> Voici vos inscriptions : </h2>' 
            .'<br>'.
                '<table>'
                    .'<tr>'
                        .'<th>Evenement</th>'
                        .'<th>Date Inscription</th>'
                        .'<th>Date Evenements</th>'
                    .'</tr>'
                    .'<tr>'
                        .'<td>'.$_user[''].'</td>'
                        .'<td>'.$_user['lastname'].'</td>'
                        .'<td>'.$_user['email'].'</td>'
                    .'</tr>'
                .'</table>';
        }}
?>