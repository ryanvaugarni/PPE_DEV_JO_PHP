<?php
session_start();
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
            $qs = $bdd->prepare("SELECT * FROM client WHERE `email` = :email ");
            $qs->execute(array('email' => $_POST["email"]
                ));
            if ($qs->rowCount() == 0)
            {
                echo "<p class=\"success\">L'email est disponible</p>";
                // On crypte le mot de passe
                $password = password_hash($_POST["passwords"], PASSWORD_DEFAULT);
                // On insert les données dans la base de données
                $qs = $bdd->prepare("INSERT INTO client (`firstname`, `lastname`, `email`, `passwords`, `country`, `city`) VALUES (?, ?, ?, ?, ?, ?)");
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
            ?>
