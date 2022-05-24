<?php
session_start();
    include_once "./src/header.inc.php";
?>
<body>
    <header>
        <img alt="icon" src="./asset/olympique.png">
        <h1>JO - Connexion</h1>
        
</header>
<main>
    <section>
        <br>
        <h2>Vous êtes tombés sur la bonne page la conncexion se passe tout en bas </h2>
        <br>
        <p>Tous les mois profitez de toutes les nouveauts série et cinéma. A partir du mois
            prochain on vous propose tous les classiques du cinéma. Où que vous soyez. Tous
            les films en VO, VOST, VF et plus d'options</p>
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
        <form method="post" class="container"> 
            <h3>Connexion</h3>
            <?php include_once ('./src/connexion_user.inc.php'); ?>
            <br>
            <p class="warning"></p>
            <div class="form-element" role="form">
            <label for="login">Email</label>
            <input type="email" name="email_co" class="floating-label" placeholder="Email" aria-required="true">
            <label for="password">Mot de passe</label>
            <input type="password" name="mdp_co" class="floating-label" placeholder="Mot de passe" aria-required="true">
            <input type="submit" name="submit_co" class="btn-sign-in" value="Se Connecter">
            <br>
            <p>Vous n'avez pas de compte ?<a href="form.php">Inscrivez-vous ici</a></p>
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
<script src="./src/app.js"></script>
</body>
</html>