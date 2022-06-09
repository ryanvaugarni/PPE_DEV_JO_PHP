<?php
    include_once "./src/head.inc.php";
    
?>
<body>
    <header>
        
        <img alt="icon" src="./asset/olympique.png">
        <h1>JO - Espace Membre</h1>
        <a class="deco" href="./src/deconnexion.php">Déconnexion</a>
    </header>
    <br>
    <main>
        <section>
        <!-- récupère les infos de l'user et affiche son prénom et son nom à la connexion et affiche ses infos dans un tableau -->
        <?php include_once "./src/get_member_infos.inc.php";?>
        </section>
        <!-- récupère les infos de l'inscription à un évènement et affiche si l'évènement est dispo ou non -->
        <?php include_once './src/get_history_user.inc.php';?>
        <section>
        <!-- récupère les infos d'inscription à un évènement et les affiche dans un tableau -->
        <?php include_once "./src/get_member_inscription.inc.php";?>
        </section>
    <br>
    <br>
    <fieldset>
    <legend>Choisissez l'évènement auquel vous voulez y assister</legend>
        <ul class="grid-picture-large">
            <li data-id="1" data-image="./asset/img1.jpg" data-title="Boxe" data-description="La boxe sera en rendez-vous des JO 2024" data-dates=": 02/01/2024">
                <figure>
                    <img src="./asset/img1.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-id="2" data-image="./asset/img2.jpg" data-title="Golf" data-description="Le Golf sera en rendez-vous des JO 2024" data-dates=": 03/01/2024">
                <figure>
                    <img src="./asset/img2.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-id="3" data-image="./asset/img3.jpg" data-title="Basketball" data-description="Le Basket sera en rendez-vous des JO 2024" data-dates=": 04/01/2024">
                <figure>
                    <img src="./asset/img3.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>   
                </figure>
            </li>
            <li data-id="4" data-image="./asset/img4.jpg" data-title="La gymnastique artistique" data-description="La gymnastique artistique sera en rendez-vous des JO 2024" data-dates=": 05/01/2024">
                <figure>
                    <img src="./asset/img4.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-id="5" data-image="./asset/img5.jpg" data-title="Football" data-description="Le Football sera en rendez-vous des JO 2024" data-dates=": 06/01/2024">
                <figure>
                    <img src="./asset/img5.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-id="6" data-image="./asset/img6.jpg" data-title="Athletisme" data-description="L'Athletisme sera en rendez-vous des JO 2024" data-dates=": 07/01/2024">
                <figure>
                    <img src="./asset/img6.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-id="7" data-image="./asset/img7.jpg" data-title="Volley-Ball" data-description="Le Volley-Ball sera en rendez-vous des JO 2024" data-dates=": 08/01/2024">
                <figure>
                    <img src="./asset/img7.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-id="8" data-image="./asset/img8.jpg" data-title="Skateboard" data-description="Le Skateboard sera en rendez-vous des JO 2024" data-dates=": 09/01/2024">
                <figure>
                    <img src="./asset/img8.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li> 
            <li data-id="9" data-image="./asset/img9.jpg" data-title="Cyclisme" data-description="Le Cyclisme sera en rendez-vous des JO 2024" data-dates=": 10/01/2024">
                <figure>
                    <img src="./asset/img9.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-id="10" data-image="./asset/img10.jpg" data-title="VTT" data-description="Le VTT sera en rendez-vous <br> des JO 2024" data-dates=": 11/01/2024">
                <figure>
                    <img src="./asset/img10.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-id="11" data-image="./asset/img11.jpg" data-title="Badminton" data-description="Le Badminton sera en rendez-vous des<br> JO 2024" data-dates=": 12/01/2024">
                <figure>
                    <img src="./asset/img11.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>
            <li data-id="12" data-image="./asset/img12.jpg" data-title="Handisport" data-description="Le Handisport sera en rendez-vous des JO <br>2024" data-dates=": 13/01/2024">
                <figure>
                    <img src="./asset/img12.jpg" alt="">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">pages</i>
                                    Agrandir
                            </h2>
                        </figcaption>
                </figure>
            </li>   
        </ul>
    </fieldset>  
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
    <script src="https://kit.fontawesome.com/1230b36ec9.js" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>