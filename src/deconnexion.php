<?php

// code qui permet de se déconnecter de la session en cours 

    session_destroy();
    header('Location:../login.php');
    exit();
?>