<?php
if(!isset($_SESSION)){
    session_start();
}
include_once ('./src/pdo.php');

if(isset($_POST['submit_co'])){
   
   if(!empty($_POST['email_co'])  && !empty($_POST['mdp_co']))
 {
//         //User's DATAS.
        $user_mailss = htmlspecialchars($_POST['email_co']);
        $user_passwordss = htmlspecialchars($_POST['mdp_co']);
        
        $checkIfUserExistss = $bdd->prepare('SELECT * FROM client where email = ?');
        $checkIfUserExistss->execute(array($user_mailss));

        $usersInfoss = $checkIfUserExistss->fetch();

            $_SESSION['email'] = $usersInfoss['email'];
        if(($checkIfUserExistss->rowCount() > 0) && ($user_mailss == $usersInfoss['email']))
        {   
            echo "<p class='success'>Vous avez rentré un email valide </p>";
            if (password_verify($user_passwordss, $usersInfoss['passwords'])) {
                echo "<br><p class='success'>Connexion réussie ! </p>";
                sleep(2);
                header('Location: espace_membre.php');
            } else {
                echo "<br><p class='warning'>Mot de passe incorrect</p>";
            }
     echo "<p class='warning'>Veuillez completer les champs </p>";

   }else{
    echo "<p class='warning'>Veuillez completer les champs </p>";

   }
}
}
            ?>