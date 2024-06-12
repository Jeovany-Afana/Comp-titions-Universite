<?php

$equipe = "";
$theme = "";
$position = "";

if (isset($_POST)) {

    if (isset($_POST['equipe'])) {
        $equipe = $_POST['equipe'];
    }
    if (isset($_POST['theme'])) {
        $theme = $_POST['theme'];
    }
    if (isset($_POST['position'])) {
        $position = $_POST['position'];
    }
}

include_once 'layoutsD/header.php';
include_once 'layoutsD/navbar.php';

?>
            
            <div class="feature-big">
                <div class="container">
                    <div class="row mb-5 site-section">
                        <div
                            class="col-lg-5 order-1 order-lg-2"
                            data-aos="fade-left"
                        >
                            <!-- <img
                                src="images/undraw_metrics_gtu7.svg"
                                alt="Image"
                                class="img-fluid"
                            /> -->
                            
                        </div>
                        <div
                            class="col-lg-7 pr-lg-7 mr-auto mt-5 order-2 order-lg-1"
                        >
                            <h2 class="text-black">
                                <?= $equipe; ?>
                            </h2>
                            <p class="mb-4">
                                <strong>Thème : </strong><?= $theme ; ?> <br>
                                <strong>Position : </strong><?= $position ; ?>
                            </p>

                            <div class="author-box" data-aos="fade-right">
                                <div class="d-flex mb-4">
                                    <div class="mr-3">
                                    <div class="row">
                        <div
                            class="col-lg-4 col-md-6 mb-4"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="person">
                                <div class="bio-img">
                                    <figure>
                                        <!-- <img
                                            src="images/person_1.jpg"
                                            alt="Image"
                                            class="img-fluid"
                                        /> -->
                                    </figure>
                                    <div class="social">
                                        Le nom
                                    </div>
                                </div>
                                <h2 class="text-black h1">Nom des joueurs</h2>
                                <span class="sub-title d-block mb-3"
                                    ></span
                                >
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 mb-4"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="person">
                                <div class="bio-img">
                                    <figure>
                                        <!-- <img
                                            src="images/person_1.jpg"
                                            alt="Image"
                                            class="img-fluid"
                                        /> -->
                                    </figure>
                                    <div class="social">
                                        Le nom
                                    </div>
                                </div>
                                <h2 class="text-black h1">Nom des joueurs</h2>
                                <span class="sub-title d-block mb-3"
                                    ></span
                                >
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 mb-4"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="person">
                                <div class="bio-img">
                                    <figure>
                                        <!-- <img
                                            src="images/person_1.jpg"
                                            alt="Image"
                                            class="img-fluid"
                                        /> -->
                                    </figure>
                                    <div class="social">
                                        Le nom
                                    </div>
                                </div>
                                <h2 class="text-black h1">Nom des joueurs</h2>
                                <span class="sub-title d-block mb-3"
                                    ></span
                                >
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 mb-4"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="person">
                                <div class="bio-img">
                                    <figure>
                                        <!-- <img
                                            src="images/person_1.jpg"
                                            alt="Image"
                                            class="img-fluid"
                                        /> -->
                                    </figure>
                                    <div class="social">
                                        Le nom
                                    </div>
                                </div>
                                <h2 class="text-black h1">Nom des joueurs</h2>
                                <span class="sub-title d-block mb-3"
                                    ></span
                                >
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 mb-4"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="person">
                                <div class="bio-img">
                                    <figure>
                                        <!-- <img
                                            src="images/person_1.jpg"
                                            alt="Image"
                                            class="img-fluid"
                                        /> -->
                                    </figure>
                                    <div class="social">
                                        Le nom
                                    </div>
                                </div>
                                <h2 class="text-black h1">Nom des joueurs</h2>
                                <span class="sub-title d-block mb-3"
                                    ></span
                                >
                            </div>
                        </div>
                        <div
                            class="col-lg-4 col-md-6 mb-4"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div class="person">
                                <div class="bio-img">
                                    <figure>
                                        <!-- <img
                                            src="images/person_1.jpg"
                                            alt="Image"
                                            class="img-fluid"
                                        /> -->
                                    </figure>
                                    <div class="social">
                                        Le nom
                                    </div>
                                </div>
                                <h2 class="text-black h1">Nom des joueurs</h2>
                                <span class="sub-title d-block mb-3"
                                    ></span
                                >
                            </div>
                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

<?php

include_once 'layoutsD/footer.php';
include_once 'layoutsD/script.php';

?>