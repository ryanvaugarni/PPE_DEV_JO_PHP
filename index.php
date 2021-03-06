<?php
session_start();
    include_once "./src/head.inc.php";
?>
<body>
    <header>
        <img alt="icon" src="./asset/olympique.png">
        <h1>Maison des ligues et de tous les sports</h1>
        <a class="connect" href="./login.php">Connexion</a>
    </header>
    <br>
    <main>
        <section>
            <h2>Prêt à la compétition? Les JO 2024 arrivent à grand pas</h2>
            <br>
            <p>Le club de la MDL est la pour que vous puissiez vous inscrire aux évènements porposés pendant les JO afin d'avoir les places en exclusivité.
                <br>
                <br>
            Alors ne tardez plus inscrivez-vous !
            </p>
        </section>
        <section>
            <?php include_once "./src/statclient_inc.php" ?>
        </section>
        <br>
        <ul class="grid-picture-large">
            <li data-image="./asset/img1.jpg" data-title="Boxe" data-description="La boxe sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
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
            <li data-image="./asset/img2.jpg" data-title="Golf" data-description="Le Golf sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
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
            <li data-image="./asset/img3.jpg" data-title="Basketball" data-description="Le Basket sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
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
            <li data-image="./asset/img4.jpg" data-title="La gymnastique artistique" data-description="La gymnastique artistique sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
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
            <li data-image="./asset/img5.jpg" data-title="Football" data-description="Le Football sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
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
            <li data-image="./asset/img6.jpg" data-title="Athletisme" data-description="L'Athletisme sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
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
            <li data-image="./asset/img7.jpg" data-title="Volley-Ball" data-description="Le Volley-Ball sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
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
            <li data-image="./asset/img8.jpg" data-title="Skateboard" data-description="Le Skateboard sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
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
            <li data-image="./asset/img9.jpg" data-title="Cyclisme" data-description="Le Cyclisme sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
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
            <li data-image="./asset/img10.jpg" data-title="VTT" data-description="Le VTT sera en rendez-vous des JO 2024" data-dates=": 02/01/2020">
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
            <li data-image="./asset/img11.jpg" data-title="Badminton" data-description="Le Badmington sera en rendez-vous des<br> JO 2024" data-dates=": 02/01/2020">
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
            <li data-image="./asset/img12.jpg" data-title="Handisport" data-description="Le Handisport sera en rendez-vous des JO <br>2024" data-dates=": 02/01/2020">
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
        <a href="./form.php">Cliquez ici pour commencer</a>
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