<?php 
    include_once './src/pdo.php';

    $_emailUser = $_SESSION['email'];
    $_nom = $_SESSION['lastname'];
    
    $_req = $bdd->prepare("SELECT firstname, lastname, email, country, city FROM client WHERE email = :email");
    $_req -> execute(array(
        'email' => $_emailUser
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
                        .'<td>'.$_user['firstname'].'</td>'
                        .'<td>'.$_user['lastname'].'</td>'
                        .'<td>'.$_user['email'].'</td>'
                    .'</tr>'
                .'</table>';
        }}
?>