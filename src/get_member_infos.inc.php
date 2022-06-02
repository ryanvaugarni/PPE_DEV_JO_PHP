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

            print  "<h2 class='hello'> Bienvenue  <span>".$_user['firstname'].  " "  .$_user['lastname']."</span></h2>";
            

            print
            '<h2> Voici vos informations : </h2>' 
            .'<br>'.
                '<table>'
                    .'<tr>'
                        .'<th>Prénom</th>'
                        .'<th>Nom</th>'
                        .'<th>Email</th>'
                        .'<th>Pays</th>'
                        .'<th>Ville</th>'
                    .'</tr>'
                    .'<tr>'
                        .'<td>'.$_user['firstname'].'</td>'
                        .'<td>'.$_user['lastname'].'</td>'
                        .'<td>'.$_user['email'].'</td>'
                        .'<td>'.$_user['country'].'</td>'
                        .'<td>'.$_user['city'].'</td>'
                    .'</tr>'
                .'</table>';
        }
    }
?>