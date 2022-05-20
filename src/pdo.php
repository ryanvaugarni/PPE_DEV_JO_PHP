<?php
session_start();
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=rvaugarni;charset=utf8;','root',''); 
        }
        catch(Exception $e)
            {
                die('DATABASE ERROR!' .$e->getMessage());
                echo "<script>alert('DATABASE ERROR')</script>";
            }
        try
        {
            $_host = "localhost";
            $_dbname = "rvaugarni";
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
?>