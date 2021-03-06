<?php
session_start();
    include_once "./src/head.inc.php";
?>
<body>
    <header>
        <img alt="icon" src="./asset/olympique.png">
        <h1>MDL - Inscription</h1>
        <a class="connect" href="./login.php">Connexion</a>
</header>
<main>
    <section>
        <br>
        <h2>Vous êtes tombés sur la bonne page, l'inscription se passe tout en bas</h2>
        <br>
        <p>Rejoins le club de la MDL pour avoir accès aux inscriptions des évènements, n'attendez plus!</p>
            <br>
    </section>
    <a class="return" href="index.php">Retour</a>
    <article>
        <ul class="grid-picture-large">
            <li data-image="./asset/img13.jpg" data-title="Equitation" data-description="L'Equitation sera en rendez-vous des JO<br> 2024" data-dates=": 02/01/2020">
                <figure>
                    <img src="./asset/img13.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-image="./asset/img14.jpg" data-title="Tir à l'arc" data-description="Le tir à l'arc sera en rendez-vous des JO<br> 2024" data-dates=": 02/01/2020">
                <figure>
                    <img src="./asset/img14.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-image="./asset/img15.jpg" data-title="L'Escrime" data-description="L'Escrime sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
                <figure>
                    <img src="./asset/img15.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-image="./asset/img16.jpg" data-title="Rugby" data-description="Le Rugby sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
                <figure>
                    <img src="./asset/img16.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
        </ul>
        <br>
    </article>
        <form action="form.php" method="post" class="container"> 
            <h3>Formulaire d'inscription</h3>
         
             <?php include_once ('./src/connexion_bdd.inc.php'); ?>
            <br>
            <p class="warning"></p>
            <div class="form-element" role="form">
            <label for="nom">Prenom :</label>
            <input type="text" name="firstname" class="floating-label name"  placeholder="Prénom" aria-required="true">
            <label for="nom">Nom :</label>
            <input type="text" name="lastname" class="floating-label name" placeholder="Nom de famille" aria-required="true">
            <label for="nom">Email :</label>
            <input type="email" name="email" class="floating-label" placeholder="Votre email" aria-required="true">
            <label for="nom">Mot de passe :</label>
            <input type="password" id="motdepasse" name="passwords" class="floating-label" placeholder="Votre mot de passe" aria-required="true">
            <label for="motdepasse">Afficher le mot de passe :</label>
            <input class="box" type="checkbox" onclick="Afficher()">
            <script>
                function Afficher()
                { 
                    var input = document.getElementById("motdepasse"); 
                    if (input.type === "password")
                    {
                        input.type = "text";
                    }
                    else
                    {
                        input.type = "password";
                    }
                } 
            </script>
            <label for="nom">Pays :</label>
            <input type="text" name="country" class="floating-label name" placeholder="France..." aria-required="true">
            <label for="nom">Ville :</label>
            <input type="text" name="city" class="floating-label name" placeholder="Paris..." aria-required="true">
            <input type="submit" name="submit_form" class="btn-sign-in" value="Je m'inscris">
            <hr>
            <br>
            <p>Vous venez de vous inscrire ? ou vous avez déjà un compte ?<a href="login.php">Connectez-vous ici</a></p>
            </div>
        </form>
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
        </figcaption>
    </figure>
</div>
<script src="./js/app.js"></script>
</body>
</html>