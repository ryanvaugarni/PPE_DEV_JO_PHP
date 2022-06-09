<?php
    include_once "./src/head.inc.php"; 
    include_once "./src/pdo.php";
?>
<body>
    <header>
        <img alt="icon" src="./asset/olympique.png">
        <h1>JO - Mon Compte</h1>
    </header>
    <br>
    <main>
      <?php
      $_idUser = $_SESSION['id'];
      $_emailUser = $_SESSION['email'];
    $_nom = $_SESSION['lastname'];
      $_req = $bdd->prepare("SELECT firstname, lastname, email, country, city FROM client WHERE id = :idUser");
        $_req -> execute(array(
            'idUser' => $_idUser
        ));
        while ($_donnees = $_req->fetchAll())
        {
            foreach ($_donnees as $_user){
                print
                    '<form method="post" action="src/update_member.php" class="container">' .
                    '<h3> Modifier votre compte '.$_user['firstname'].' '.$_user['lastname'].'</h3>' .
                    '<div class="form-element" role="form"' .
                        '<label for="firstname">Prénom : </label>' .
                        '<input type="text" name="firstname" class="floating-label" id="firstname" value="'.$_user['firstname'].'" required>' .
                        '<br>' .
                        '<label for="lastname">Nom : </label>' .
                        '<input type="text" name="lastname" class="floating-label" id="lastname" value="'.$_user['lastname'].'" required>' .
                        '<br>' .
                        '<label for="email">Email : </label>' .
                        '<input type="email" name="email" class="floating-label" id="email" value="'.$_user['email'].'" required>' .
                        '<br>' .
                        '<label for="country">Pays : </label>' .
                        '<input type="text" name="country" class="floating-label" id="country" value="'.$_user['country'].'" required>' .
                        '<br>' .
                        '<label for="city">Ville : </label>' .
                        '<input type="text" name="city" class="floating-label" id="city" value="'.$_user['city'].'" required>' .
                        '<br>' .
                        '<input type="submit" class="btn-sign-in" value="Modifier">'
                    .'</form>';
            }
        }
      ?>
    </main>
    <footer>
        <p>&copy; - Maison des Ligues - Ryan Vaugarni - 2022</p>
    </footer>
    <!-- modale -->
    <div class="parent-modale" role="dialog">
        <figure class="modale">
            <button aria-label="closed">
                <span class="material-icons">clear</span>
            </button>
            <img src="https://via.placeholder.com/500" alt="picture">
            <figcaption class="desc">
                <h3>title</h3>
                <p>
   
                </p>
                <time>Years : </time>
                <br>
                <form action="#" method="POST">
                    <input type="submit" name="signUp" value="S'inscrire à l'évènement" class="connexion">
                </form>
            </figcaption>
        </figure> 
    </div>
    <script src="./js/app.js"></script>
</body>
</html>