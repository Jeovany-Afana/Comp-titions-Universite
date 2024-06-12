<?php

include_once 'layouts/header.php';
// include_once 'layouts/navbar.php';

?>
    <style>
        @font-face {
            font-family: "Joe";
            src: url("DMSerifDisplay-Italic.ttf");
        }

        h1{
            font-family: "Joe";
            text-space: 0.9rem;
            letter-spacing: 0.07rem;
            text-decoration: black;
            text-shadow: 0px 1px 11px #646be5;
        }

        strong{
            color: black;
            font-family: "Joe";
        }
    </style>
<div class="site-blocks-cover" style="overflow: hidden;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div
                            class="col-md-12"
                            style="position: relative;"
                            data-aos="fade-up"
                            data-aos-delay="200"
                        >
                            <img
                                src="images/logo_supdeco3.png"
                                alt="Image"
                                class="img-fluid img-absolute"/>

                            <div
                                class="row mb-4"
                                data-aos="fade-up"
                                data-aos-delay="200"
                            >
                                <div class="col-lg-6 mr-auto">
                                    <h1 style="color: #313f96;">Bienvenue Dans le concours de Génie en Herbe 🧘‍♂️</h1>
                                    <p class="mb-5">
                                        <strong>
                                            Le savoir est un champ, mais s'il n'est labouré, ni surveillé, il ne sera pas récolté.
                                        </strong> <br>
                                        Proverbe peul, peuple Africain
                                    </p>
                                    <div>
                                        <a
                                            href="home.php"
                                            class="btn btn-info mr-2 mb-2"
                                            >Démarrer</a
                                        >
                                        <a
                                            href="index.php"
                                            class="btn btn-outline-danger mr-2 mb-2"
                                            >Retour</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php

// include_once 'layouts/footer.php';
include_once 'layouts/script.php';

?>