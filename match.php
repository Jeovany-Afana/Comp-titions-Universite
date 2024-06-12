<?php

include_once 'securite.php';

if (isset($_POST['equipeA'])) {
    $equipeA = htmlspecialchars($_POST['equipeA']);
    $_SESSION['equipeA'] = $_POST['equipeA'];
}

if (isset($_POST['equipeB'])) {
    $equipeB = htmlspecialchars($_POST['equipeB']);
    $_SESSION['equipeB'] = $_POST['equipeB'];
}
/*
if ($equipeA == $equipeB) {
    header('Location: home.php');
}  */ 

include_once 'layouts/header.php';
// include_once 'layouts/navbar.php';

?>

            <!-- <div class="site-section bg-light" >
                <div class="container">
                    <div class="row mb-">
                        <div class="col-12 text-center">
                            <h2 class="section-title mb-"></h2>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="site-section" id="features-section">
                <div class="container">
                    <div class="row align-items-stretch">
                        <div
                            class="col-md-5 col-lg-5 mb-lg-5"
                            data-aos="fade-up"
                            >
                            <div class="col-7 text-center mb-1 mt-1">
                                <h2 class="section-title">Rencontre</h2>
                                <!-- <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Fuga quos quaerat sapiente
                                    nam, id vero. -->
                                </p>
                            </div>
                        </div>
                        <div
                            class="col-md-2 col-lg-2  mb-lg-2"
                            data-aos="fade-up"
                            >
                        </div>
                        <div
                            class="col-md-5 col-lg-5  mb-lg-5"
                            data-aos="fade-up"
                            >
                            <div class="input-group mb-3">
                                <input style="border: none; font-size: 1.5em; color: #313f96; font-weight: bold;" type="text" class="form-control bg-white text-right" value="TOURNOI GENIE en" disabled aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <input style="border: none; color: #313f96; font-weight: bold; font-size: 1.5em;" type="text" class="form-control bg-warning col-5" value="HerBe" disabled>
                            </div>
                        </div>
                    </div>
                    <div
                        class="row mb-5 justify-content-center text-center"
                        data-aos="fade-up"
                        >
                    </div>
                    <div class="row align-items-stretch">
                        <div
                            class="col-md-5 col-lg-5 mb-lg-5"
                            data-aos="fade-up"
                            >
                            <h4><strong><?= $_SESSION['equipeA'] ;?></strong><button style="border: none;" class="btn btn-sm btn-outline-danger ml-3" onclick="dim10A();">-</button></h4>
                            <div style="border-left: 10px solid #313f96;" class="unit-4 d-block">
                                <!-- <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"
                                        ><span
                                            class="text-primary icon-autorenew"
                                        ></span
                                    ></span>
                                </div> -->
                                <div>
                                    <h3>Equipe A</h3>
                                    <h1 style="font-size: 5em;">
                                        <strong>
                                            <input class="col-6 text-center" style="border-radius: 35%; border: none; background: #f1f1f1; font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; color: gray;" disabled id="scoreA" type="text" value="00">
                                        </strong>
                                    </h1>
                                    
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-2 col-lg-2  mb-lg-2"
                            data-aos="fade-up"
                            >
                            <input style="border: none; font-size: 1.4em; font-weight: bold" type="text" disabled class="form-control text-center bg-white mb-2" value="VS">
                            <div style="border-left: 10px solid #f9bb09; border-right: 10px solid #f9bb09; background-color: #f9bb09;" class="unit-4 d-block">
                                <!-- <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"
                                        ><span
                                            class="text-primary icon-autorenew"
                                        ></span
                                    ></span>
                                </div> -->
                                <div>
                                    <h1 style="font-size: 3.5em;" id="countdown">
                                        30
                                    </h1>
                                    <input type="hidden" id="hidden" value="">
                                    <audio id="audio" src="alarme_2.mp3" type="audio/mpeg"></audio>
                                    <audio id="avertissement" src="avertissement1.mp3" type="avertissement/mpeg"></audio>
                                </div>
                            </div>
                            <div class="justify-content-center text-center">
                                <button type="button" onclick="startStop();" id="startStop" style="font-size: 0.8em;" class="btn btn-outline-success">></button>
                                <button style="font-size: 0.9em;"onclick="reset();" id="reset" class="btn btn-outline-danger">x</button>
                            </div>
                        </div>
                        <div
                            class="col-md-5 col-lg-5  mb-lg-5"
                            data-aos="fade-up"
                            >
                            <h4 class="text-right"><button style="border: none;" class="btn btn-sm btn-outline-danger mr-3" onclick="dim10B();">-</button><strong><?= $_SESSION['equipeB'] ;?></strong></h4>
                            <div style="border-right: 10px solid #f9bb09;" class="unit-4 d-block">
                                <!-- <div class="unit-4-icon mb-3">
                                    <span class="icon-wrap"
                                        ><span
                                            class="text-primary icon-autorenew"
                                        ></span
                                    ></span>
                                </div> -->
                                <div>
                                    <h3>Equipe B</h3>
                                    <h1 style="font-size: 5em;">
                                        <strong>
                                            <input class="col-6 text-center" style="border-radius: 35%; border: none; background: #f1f1f1; font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'; color: gray !important;" disabled id="scoreB" type="text" value="00">
                                        </strong>
                                    </h1>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-md-5 col-lg-5 mb-lg-5">
                            <table class="table">
                                <tbody>
                                    <td><button onclick="ajoutA10();" class="btn btn-outline-secondary">10</button></td>
                                    <td><button onclick="ajoutA20();" class="btn btn-outline-success">20</button></td>
                                    <td><button onclick="ajoutA30();" class="btn btn-outline-info">30</button></td>
                                    <td><button onclick="ajoutA40();" class="btn btn-outline-danger">40</button></td>
                                    <td><button onclick="dimA10();" class="btn btn-outline-danger">-10</button></td>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-2 col-lg-2 mb-lg-2">
                            <table class="table table-bordered">
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-5 col-lg-5 mb-lg-5">
                            <table class="table">
                                <tbody>
                                <td><button onclick="ajoutB10();" class="btn btn-outline-secondary">10</button></td>
                                    <td><button onclick="ajoutB20();" class="btn btn-outline-success">20</button></td>
                                    <td><button onclick="ajoutB30();" class="btn btn-outline-info">30</button></td>
                                    <td><button onclick="ajoutB40();" class="btn btn-outline-danger">40</button></td>
                                    <td><button onclick="dimB10();" class="btn btn-outline-danger">-10</button></td>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="row form-group justify-content-center">
                        <button type="submit" class="btn btn-outline-success mr-2">Sauvegarder</button>
                        <button onclick="resett();" class="btn btn-outline-info mr-2">Réinitialiser</button>
                        <a href="home.php" class="btn btn-outline-danger">Retour</a>
                    </div>
                </div>
            </div>

           <!--<script src="essaie.js"></script> -->
            <script src="script.js"></script>


<?php

include_once 'layouts/footer.php';
include_once 'layouts/script.php';

?>