<?php 

// code qui permet de récupérer le firstname et le lastname de l'utilisateur connecté et d'afficher ses infos dans un tableau

    include_once './src/pdo.php';
    
    $_req = $bdd->prepare("SELECT COUNT(*) AS NB FROM client ");
    $_req -> execute(
       
    );
    $_id = (int) $_SESSION['id'];
    
    if ($_req)
    {
        $_donnees = $_req->fetch();
        //var_dump($_donnees);
        foreach ($_donnees as $_id) 
        {
        print  "<h2 class='hello'> Vous êtes aujourd'hui <span>".$_donnees['NB'].  " " ."</span> personnes inscrites sur la plateforme</h2>";
        }
    }
    else
    {
        print "Erreur";
    }
?>