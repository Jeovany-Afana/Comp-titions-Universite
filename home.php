<?php

include_once 'layouts/header.php';
include_once 'layouts/navbar.php';

?>

            <div class="site-section bg-light" >
                <div class="container">
                    <div class="row mb-">
                        <div class="col-12 text-center">
                            <h2 class="section-title mb-"></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-big">
                <div class="container">
                    <form action="match.php" method="POST">
                        <div class="row mb-1 site-section">
                            <div class="col-lg-6" data-aos="fade-right">
                                <div class="author-box" data-aos="fade-left">
                                    <div class="d-flex mb-4">
                                        <div class="mr-auto text-black">
                                            <strong class="font-weight-bold mb-0"
                                                >Equipe A</strong>
                                        </div>
                                    </div>
                                    <div class="from-group">
                                        <label for="equipe_a">Choisissez un Club</label>
                                        <select class="form-control" name="equipeA" id="equipe_a">   
                                            <option value="..." disabled selected hidden="">Select...</option>
                                            <option value="Club INFORMATIQUE et TECHNOLOGIE">Club INFORMATIQUE ET TECHNOLOGIE</option>
                                            <option value="Club VOYAGE">Club VOYAGE</option>
                                            <option value="Club ANGLAIS">Club ANGLAIS</option>
                                            <option value="Club ART-CULINAIRE">Club ART-CULINAIRE</option>
                                            <option value="Club ART-ORATOIRE">Club ART-ORATOIRE</option>
                                            <option value="Club HUMANITAIRE">Club HUMANITAIRE</option>
                                            <option value="Club JPCE">JPCE</option>
                                            <option value="Cercle des LOGISTICIENS">Cercle des LOGISTICIENS</option>
                                            <option value="BUREAU DES ETUDIANTS">BUREAU DES ETUDIANTS (BDE)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" data-aos="fade-right">
                                <div class="author-box" data-aos="fade-left">
                                    <div class="d-flex mb-4">
                                        <div class="mr-auto text-black">
                                            <strong class="font-weight-bold mb-0"
                                                >Equipe B</strong>
                                        </div>
                                    </div>
                                    <div class="from-group">
                                        <label for="equipe_b">Le nom de classe</label>
                                        <select class="form-control" name="equipeB" id="equipe_b">   
                                            <option value="..." selected disabled hidden>Select...</option>
                                            <option value="Club INFORMATIQUE et TECHNOLOGIE">Club INFORMATIQUE ET TECHNOLOGIE</option>
                                            <option value="Club VOYAGE">Club VOYAGE</option>
                                            <option value="Club ANGLAIS">Club ANGLAIS</option>
                                            <option value="Club ART-CULINAIRE">Club ART-CULINAIRE</option>
                                            <option value="Club ART-ORATOIRE">Club ART-ORATOIRE</option>
                                            <option value="Club HUMANITAIRE">Club HUMANITAIRE</option>
                                            <option value="Club JPCE">JPCE</option>
                                            <option value="Cercle des LOGISTICIENS">Cercle des LOGISTICIENS</option>
                                            <option value="BUREAU DES ETUDIANTS">BUREAU DES ETUDIANTS (BDE)</option>
                                         </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1 site-section">
                            <div class="col-lg-6" data-aos="fade-right">
                            </div>
                            <div class="col-lg-6" data-aos="fade-right">
                                <button type="submit" class="btn btn-warning">Valider</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

<?php

include_once 'layouts/footer.php';
include_once 'layouts/script.php';

?>