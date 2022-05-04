<?php
session_start();
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=formulaire_de_contact;charset=utf8;','root',''); 
        }
        catch(Exception $e)
            {
                die('DATABASE ERROR!' .$e->getMessage());
                echo "<script>alert('DATABASE ERROR')</script>";
            }
        try
        {
            $_host = "localhost";
            $_dbname = "formulaire_de_contact";
            $_user = "root";
            $_password = getenv('MYSQL_SECURE_PASSWORD');
            $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $_bdd = new PDO("mysql:host={$_host};dbname={$_dbname};", $_user, $_password);
            $_prenom = $_POST["firstname"];
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                $_pdo_options
            );
        }
        catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
if(isset($_POST['submit_co'])){
   
   if(!empty($_POST['email_co'])  && !empty($_POST['mdp_co']))
 {
//         //User's DATAS.
        $user_mailss = htmlspecialchars($_POST['email_co']);
        $user_passwordss = htmlspecialchars($_POST['mdp_co']);
        
         $checkIfUserExistss = $bdd->prepare('SELECT * FROM formulaire where email = ?');
         $checkIfUserExistss->execute(array($user_mailss));

         $usersInfoss = $checkIfUserExistss->fetch();

            $_SESSION['email'] = $usersInfoss['email'];
        if(($checkIfUserExistss->rowCount() > 0) && ($user_mailss == $usersInfoss['email']))
        {   
            echo "email is correct";
            if (password_verify($user_passwordss, $usersInfoss['passwords'])) {
                echo "<br>Connexion réussie !";
                sleep(2);
                header('Location: espace_membre.php');
            } else {
                echo "<br>Identifiants invalides";
            }
     echo "<p class='success'>Veuillez completer les champs </p>";

   }else{
    echo "<p class='warning'>Veuillez completer les champs </p>";

   }

}

}
            ?>