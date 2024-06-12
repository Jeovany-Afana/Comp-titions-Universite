<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styler.css">
    <title>Document</title>

    <style>
        @font-face {
            font-family: "joe_font";
            src: url("DMSerifDisplay-Italic.ttf");
        }
    </style>
</head>
<body>
<?php
$equipeA = $equipeB = $positionA = $positionB = $theme = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $equipeA = $_POST['equipeA'] ?? '';
    $equipeB = $_POST['equipeB'] ?? '';
    $positionA = $_POST['positionA'] ?? '';
    $positionB = $_POST['positionB'] ?? '';
    $theme = $_POST['theme'] ?? '';
}

include_once 'layouts/header.php';
?>

<div class="site-section" id="features-section">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-md-3 col-lg-3 mb-lg-3" data-aos="fade-up">
                <div class="col-7 text-center mb-1 mt-1">
                    <h2 class="section-title">Rencontre</h2>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 mb-lg-3" data-aos="fade-up">
                <div class="input-group mb-3">
                    <input style="border: none; font-size: 1.2em; color: #313f96; font-weight: bold; text-align: center" type="text" class="form-control bg-white text-right" value="Thème : <?= htmlspecialchars($theme); ?>" disabled>
                    <input style="border: none; color: #313f96; font-weight: bold; font-size: 1.1em;" type="text" class="form-control bg-warning col-2 text-center" value="DEBATTONS" disabled>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-5 col-lg-5 mb-lg-3" data-aos="fade-up">
                <form action="equipeD.php" method="POST">
                    <input type="hidden" name="equipe" value="<?= htmlspecialchars($equipeA); ?>">
                    <input type="hidden" name="position" value="<?= htmlspecialchars($positionA); ?>">
                    <input type="hidden" name="theme" value="<?= htmlspecialchars($theme); ?>">
                    <button type="submit" class="btn btn-outline-info mb-2">Votre Tour</button>
                </form>
                <div style="border-left: 10px solid #313f96;" class="unit-4 d-block">
                    <div>
                        <h3><?= htmlspecialchars($positionA); ?></h3>
                        <h1 style="font-size: 3.5em;">
                            <strong>
                                <input class="col-12 text-center" style="border-radius: 35%; border: none; background: #f1f1f1; color: gray; " disabled type="text" value="<?= htmlspecialchars($equipeA); ?>">
                            </strong>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-lg-2 mb-lg-2" data-aos="fade-up" >
                <div style="border-left: 10px solid #f9bb09; border-right: 10px solid #f9bb09; background: #3065DFFF; border: 10px solid #F9BB09FF;" class="unit-4 d-block">
                    <div>
                        <h1 style="font-size: 5em; font-family: 'joe_font'; color: white; text-shadow: 0 0 0 white" id="countdown">VS</h1>
                        <input type="hidden" id="hidden" value="">
                        <audio id="audio" src="alarme_2.mp3" type="audio/mpeg"></audio>
                        <audio id="avertissement" src="avertissement1.mp3" type="audio/mpeg"></audio>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-5 mb-lg-5" data-aos="fade-up">
                <div class="text-right">
                    <button class="btn btn-outline-danger mb-2">Votre Tour</button>
                </div>
                <div style="border-right: 10px solid red;" class="unit-4 d-block">
                    <div>
                        <h3><?= htmlspecialchars($positionB); ?></h3>
                        <h1 style="font-size: 3.5em;">
                            <strong>
                                <input class="col-12 text-center" style="border-radius: 35%; border: none; background: #f1f1f1; color: gray;" disabled type="text" value="<?= htmlspecialchars($equipeB); ?>">
                            </strong>
                        </h1>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Début de la barre de progréssion -->
    <div class="progress">
        <div class="progress-bar" id="myProgressBar" role="progressbar" style="width:0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
        <!-- Fin de la barre de progression  -->
        <!-- Paragraphe d'affichage du texte de surplus  -->
        <div class="container">
            <p class="text-primary" id="paragraphe_surplus"></p>
        </div>
    <!--  -->
    <!-- Début de la section qui contient l'affichage du chronomètre et les boutons -->
    <div class="container" id="block">
        <div class="row align-items-center">
            <div class="col-auto">
                <div class="d-flex flex-column align-items-center">
                    <button type="button" class="btn btn-outline-primary mb-2" id="start">Commencer</button>
                    <br>
                    <button id="stop" class="btn btn btn-outline-danger mb-2">Pause</button>
                    <br>
                    <button id="reset" class="btn btn-outline-success">Rénitialiser</button>
                </div>
            </div>
            <div class="col-auto">
                <p id="time" class="text-primary" style="font-size: 19rem; font-family: 'joe_font'; text-shadow: 6px -5px 18px #3065df; color:darkblue; ">0 : 0</p>
            </div>
            
            <div class="col-auto">
                <form method="POST" id="formulaire">
                    <label>
                        <input type="number" class="form-control" id="duree_passage" style="border: 3px groove" placeholder="Durée du passage" min="0">
                    </label>
                    <input type="submit" class="btn-primary" id="soumettre" value="Confirmer" style="border-radius: 20px">
                </form>
            </div>
        </div>
    </div>
</div>

<script src="chrono24.js"></script>
<script src="progress.js"></script>
<script src="script2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/main.js"></script>

<?php include_once 'layouts/footer.php'; ?>
</body>
</html>
