<?php
include './src/pdo.php';

if (!empty($_POST))
{
    //le formulaire a été envoyé
    // On véfifier que les champs sont remplient
    if (isset($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["passwords"], $_POST["country"], $_POST["city"]) && !empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["passwords"]) && !empty($_POST["country"]) && !empty($_POST["city"]))
    {
        //les champs sont remplit
        // On vérifie que l'email est valide
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
        {
            //l'email est valide
            // On vérifie que l'email n'est pas déjà utilisé
            $qs = $bdd->prepare("SELECT * FROM formulaire WHERE `email` = :email ");
            $qs->execute(array('email' => $_POST["email"]
                ));
            if ($qs->rowCount() == 0)
            {
                echo "<p class=\"success\">L'email est disponible</p>";
                // On crypte le mot de passe
                $password = password_hash($_POST["passwords"], PASSWORD_DEFAULT);
                // On insert les données dans la base de données
                $qs = $bdd->prepare("INSERT INTO formulaire (`firstname`, `lastname`, `email`, `passwords`, `country`, `city`) VALUES (?, ?, ?, ?, ?, ?)");
                $qs->execute(array($_POST["firstname"], $_POST["lastname"], $_POST["email"], $password, $_POST["country"], $_POST["city"]));

                $_SESSION["firstname"] = $_POST["firstname"];
                $_SESSION["lastname"] = $_POST["lastname"];
                $_SESSION["email"] = $_POST["email"];
                print "<p class=\"success\"> Votre inscription a bien été prise en compte</p>";
                print "<p class=\"success\"> ".$_prenom." vous pouvez maintenant vous connecter</p>";
                // On redirige vers la page de connexion
                // header("Location: connexion.php");    
            }
            else
            {
                echo "<p class=\"warning\">L'email est déjà utilisé</p>";


            }
        }
        
    }
}

                // if(isset($_POST["prenom"]) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['pays']) && isset($_POST['ville']))
                // {
                //     $_prenom = $_POST['prenom'];
                //     $_nom = $_POST['nom'];
                //     $_email = $_POST['email'];
                //     $_password = $_POST['mdp'];
                //     $_pays = $_POST['pays'];
                //     $_ville = $_POST['ville'];

                //     if(strlen($_prenom) > 2 || strlen($_nom) > 2 || strlen($_email) > 10 || strlen($_password) > 6|| strlen($_pays) > 5 || strlen($_ville) > 5)
                //     {
                //         if(is_numeric($_prenom) || is_numeric($_nom) || is_numeric($_email) || is_numeric($_password) || is_numeric($_pays) || is_numeric($_ville))
                //         {
                //             echo "<p class=\"warning\"> veuillez saisir des lettres</p>";
                //         }
                //         else if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                //             echo "<p class=\"warning\"> veuillez saisir un email valide</p>";
                //         }
                //         else 
                //         {
                //             $_bdd->exec("INSERT INTO `formulaire`(prenom, nom, email, mdp, pays, ville) VALUES ('$_prenom', '$_nom', '$_email', '".hash('sha256',$_password)."', '$_pays', '$_ville')");
                //             // sleep(1);
                //             // header('Location: login.php');

                //             print "<p class=\"success\"> Votre inscription a bien été prise en compte ".$_prenom." vous pouvez maintenant vous connecter</p>";
                //         }
                //     }  
                // }
            ?>
