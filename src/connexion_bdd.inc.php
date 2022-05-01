<?php
session_start();
            try {
                $_host = "localhost";
                $_dbname = "formulaire_de_contact";
                $_user = "root";
                $_password = getenv('MYSQL_SECURE_PASSWORD');

                $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                    
                $_bdd = new PDO("mysql:host={$_host};dbname={$_dbname};", $_user, $_password);
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options);
                }
                catch(Exception $e)
                {
                    die('Erreur : '.$e->getMessage());
                }
                if(isset($_POST["prenom"]) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['pays']) && isset($_POST['ville']))
                {
                    $_prenom = $_POST['prenom'];
                    $_nom = $_POST['nom'];
                    $_email = $_POST['email'];
                    $_password = $_POST['mdp'];
                    $_pays = $_POST['pays'];
                    $_ville = $_POST['ville'];

                    if(strlen($_prenom) > 2 || strlen($_nom) > 2 || strlen($_email) > 10 || strlen($_password) > 6|| strlen($_pays) > 5 || strlen($_ville) > 5)
                    {
                        if(is_numeric($_prenom) || is_numeric($_nom) || is_numeric($_email) || is_numeric($_password) || is_numeric($_pays) || is_numeric($_ville))
                        {
                            echo "<p class=\"warning\"> veuillez saisir des lettres</p>";
                        }
                        else if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                            echo "<p class=\"warning\"> veuillez saisir un email valide</p>";
                        }
                        else 
                        {
                            $_bdd->exec("INSERT INTO `formulaire`(prenom, nom, email, mdp, pays, ville) VALUES ('$_prenom', '$_nom', '$_email', '".hash('sha256',$_password)."', '$_pays', '$_ville')");
                            // sleep(1);
                            // header('Location: login.php');

                            print "<p class=\"success\"> Votre inscription a bien été prise en compte ".$_prenom." vous pouvez maintenant vous connecter</p>";
                        }
                    }  
                }
                
                
//             if(isset($_POST['submit_form']))
// {


//     //Check if the user filled the form.
//     if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['mdp'] AND !empty($_POST['pays']) AND !empty($_POST['ville'])))
//     {

//         //User's DATAS.
//         $user_mail = htmlspecialchars($_POST['email']) ;
//         $user_lastname = htmlspecialchars($_POST['prenom']);
//         $user_name = htmlspecialchars($_POST['email']);
//         $user_password = password_hash($_POST['mdp'] , PASSWORD_DEFAULT);
//         $user_city = htmlspecialchars($_POST['ville']);
//         $user_country = htmlspecialchars($_POST['pays']);

//         //Check if the user already exists on the websit
//         $checkIfUserAlreadyExists = $bdd->prepare('SELECT email from formulaire where email = ?');
//         $checkIfUserAlreadyExists->execute(array($user_mail));
        

//         if($checkIfUserAlreadyExists->rowCount() == 0)
//         {
//             //Insert the user on the database
//             $InsertUserOnWebsite = $bdd ->prepare('INSERT INTO formulaire(nom, prenom, email, mdp,pays,ville) VALUES(?, ?, ?, ? ,? ,?)');
//            $InsertUserOnWebsite->execute(array($user_name, $user_lastname, $user_mail, $user_password,$user_city,$user_country,$date));

          
//            $GetInfosOfThisUser = $bdd ->prepare('SELECT  nom, prenom ,email FROM formulaire WHERE nom = ? AND prenom = ? AND email = ?');
//          $GetInfosOfThisUser->execute(array($user_name, $user_lastname, $user_mail));

//            $usersInfos = $GetInfosOfThisUser->fetch();
// /*
//             $_SESSION['auth'] = true;
//             $_SESSION['id'] = $usersInfos['id'];
//             $_SESSION['lastname'] = $usersInfos['nom'];
           
//             $_SESSION['mail'] = $usersInfos['mail'];

//             */
//       //      header("Location: index.php");


// echo "<p class='success'>Inscription effectuee</p>";
//         }
//         else
//         {
//         echo "<p class='warning'>L'utilisateur existe dÃ©ja sur le site </p>";
//         }


//     }
//     else
//     {
//         echo "<p class='warning'>Veuillez completer tous les champs...</p>";
//     }
// }
            ?>
