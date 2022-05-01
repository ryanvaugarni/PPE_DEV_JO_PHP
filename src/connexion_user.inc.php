<?php
session_start();
/*
    try{
        //session_start();
        $bdd = new PDO('mysql:host=localhost;dbname=formulaire_de_contact;charset=utf8;','root',''); 
    }
    catch(Exception $e)
        {
            die('DATABASE ERROR!' .$e->getMessage());
            echo "<script>alert('DATABASE ERROR')</script>";
        } */


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
               if (!empty($_POST['email_co']) && !empty($_POST['mdp_co'])) {
                    $emails = $_POST['email_co'];
                    $passwords = $_POST['mdp_co'];
                    $qs = $bdd->prepare("SELECT * FROM formulaire WHERE `email` = :email ");
                    $qs ->execute(array('email' => $emails));
                    #$q->bindValue('email', $email);
                    // $q = $_bdd->prepare("SELECT * FROM `formulaire` WHERE email=='$emails' ");
                    // echo $q;
                    // #$q->execute(array($emails));
                    // $res = $q->fetch();
                    if(($qs->rowCount() > 0) && ($emails == $res['email']))
                    {   
                        echo "email is correct";
                        if (password_verify($passwords, $res['mdp'])) {
                            echo "<br>Connexion réussie !";
                            header('Location: espace_membre.php');
                        } else {
                            echo "<br>Identifiants invalides";
                        }
                }
                echo "<br>Test faute";
            }else{
                echo "<br>Veuillez remplir tous les champs";
            }

            ?>