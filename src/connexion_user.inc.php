<?php
    try{
        //session_start();
        $bdd = new PDO('mysql:host=localhost;dbname=formulaire_de_contact;charset=utf8;','root',''); 
    }
    catch(Exception $e)
        {
            die('DATABSE ERROR!' .$e->getMessage());
            echo "<script>alert('DATABASE ERROR')</script>";
        } 
        if(isset($_POST['submit'])){

               if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
                    $emails = $_POST['email'];
                    $passwords = $_POST['mdp'];
                    $q = $_bdd->prepare('SELECT * FROM `formulaire` WHERE email = ?');
                    $q->execute(array($emails));
                    $res = $q->fetch();
                    if(($q->rowCount() > 0) && ($emails == $res['mail']))
                    {   
        
                        if (password_verify($passwords, $res['mdp'])) {
                            echo "<br>Connexion réussie !";
                            header('Location: index.php');
                        } else {
                            echo "<br>Identifiants invalides";
                        }
                    
                
                }
                echo "<br>Test faute";
            }
            echo "<br>Champs non renseignés";

        }
            ?>