<?php
session_start();
        try{
            $bdd = new PDO('mysql:host=172.190.1.52;dbname=rvaugarni;charset=utf8;','rvaugarni','292215Rv78'); 
        }
        catch(Exception $e)
            {
                die('DATABASE ERROR!' .$e->getMessage());
                echo "<script>alert('DATABASE ERROR')</script>";
            }
        try
        {
            $_host = "172.190.1.52";
            $_dbname = "rvaugarni";
            $_user = "rvaugarni";
            $_password = "292215Rv78";
            // $_password = getenv('MYSQL_SECURE_PASSWORD');
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
?>