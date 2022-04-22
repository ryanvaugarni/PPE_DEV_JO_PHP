<?php
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
                            print "<p class=\"warning\"> veuillez saisir des lettres</p>";
                        }
                        else if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                            print "<p class=\"warning\"> veuillez saisir un email valide</p>";
                        }
                        else 
                        {
                            $_bdd->exec("INSERT INTO `formulaire`(prenom, nom, email, mdp, pays, ville) VALUES ('$_prenom', '$_nom', '$_email', '$_password', '$_pays', '$_ville')");
                            print "<p class=\"success\"> Votre inscription a bien été prise en compte </p>";
                        }
                    }  
                }
        ?>