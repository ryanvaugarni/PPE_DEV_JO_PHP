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

                    if(isset($_POST['email']) && isset($_POST['mdp']))
                    {
                        $_email = $_POST['email'];
                        $_password = $_POST['mdp'];

                        if(strlen($_email) > 10 || strlen($_password) > 6)
                        {
                            if(is_numeric($_email))
                            {
                                print "<p class=\"warning\"> veuillez saisir des lettres</p>";
                            }
                            else if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
                                print "<p class=\"warning\"> veuillez saisir un email valide</p>";
                            }
                            else 
                            {
                                $_bdd->exec("SELECT FROM `formulaire` WHERE email='$_email' AND mdp='$_mdp'.hash('sha256', $_mdp) ");
                                print "<p class=\"success\"> Vous vous êtes connecté avec succès.</p>";
                                session_start();
                                $_SESSION['email'] = $_email;
                                $_SESSION['mdp'] = $_password;
                                sleep(1);
                                header('Location: index.php');
                            }
                        }  
                    }
            ?>