<?php

include_once 'layoutsD/header.php';
include_once 'layoutsD/navbar.php';
?>
    <style>
        @font-face {
            font-family: "joe_font";
            src: url("DMSerifDisplay-Italic.ttf");
        }
    </style>
<div class="site-section bg-light" >
    <div class="container">
        <div class="row mb-">
            <div class="col-12 text-center">
                <h2 class="section-title mb-"></h2>
            </div>
        </div>
        <!-- <div class="row mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img
                    src="images/undraw_bookmarks_r6up.svg"
                    alt="Image"
                    class="img-fluid"
                />
            </div>
            <div class="col-lg-5 ml-auto pl-lg-5">
                <h2 class="text-black mb-4 h3 font-weight-bold">
                    Our Mission
                </h2>
                <p class="mb-4">
                    Eos cumque optio dolores excepturi rerum
                    temporibus magni recusandae eveniet, totam omnis
                    consectetur maxime quibusdam expedita dolorem
                    dolor nobis dicta labore quaerat esse magnam
                    unde, aperiam delectus! At maiores, itaque.
                </p>
                <ul class="ul-check mb-5 list-unstyled success">
                    <li>Laborum enim quasi at modi</li>
                    <li>Ad at tempore</li>
                    <li>Labore quaerat esse</li>
                </ul>
                <p>
                    <a href="#" class="btn btn-primary"
                        >Learn More</a
                    >
                </p>
            </div>
        </div> -->
    </div>
</div>
<div class="feature-big">
    <div class="container">
        <form action="matchD.php" method="POST">
            <div class="row mb-1 site-section">
                <div class=" mb-4 col-lg-12">
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <label for="" class="col-sm-2 col-form-label text-dark" style="font-family: 'joe_font'; font-weight: bold">THEME : <wbr></label>
                            <input type="text" class="form-control" name="theme" id="" placeholder="Entrez le thème du débat">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="author-box" data-aos="fade-left">
                        <div class="d-flex mb-4">
                            <div class="mr-auto text-black">
                                <strong class="font-weight-bold mb-0"
                                    >Equipe A</strong>
                            </div>
                        </div>
                        <div class="from-group">
                            <label for="equipe_a">Choose a class</label>
                            <select class="form-control" name="equipeA" id="equipe_a">   
                                <option value="...">Select...</option>
                                <option value="L3 Info">L3 Informatique</option>
                                <option value="L2 Info">L2 Informatique</option>
                                <option value="L1 Info-A">L1 Informatique-A</option>
                                <option value="L1 Info-B">L1 Informatique-B</option>
                                <option value="L3 Gestion">L3 Gestion</option>
                                <option value="L2 Gestion">L2 Gestion</option>
                                <option value="L1 Gestion-A">L1 Gestion-A</option>
                                <option value="L1 Gestion-B">L1 Gestion-B</option>
                                <option value="BTL3">BTL3</option>
                                <option value="BTL2">BTL2</option>
                                <option value="BTL1-A">BTL1-A</option>
                                <option value="BTL1-B">BTL1-B</option>
                                <option value="L1 Droit">L1 Droit</option>
                            </select>
                        </div>
                        <div class="from-group mt-4">
                            <select class="form-control col-6" name="positionA" id="">   
                                <option value="...">Position à défendre</option>
                                <option value="Pour">Pour</option>
                                <option value="Contre">Contre</option>
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
                            <label for="equipe_b">Choose a class</label>
                            <select class="form-control" name="equipeB" id="">   
                                <option value="...">Select...</option>
                                <option value="L3 Info">L3 Informatique</option>
                                <option value="L2 Info">L2 Informatique</option>
                                <option value="L1 Info-A">L1 Informatique-A</option>
                                <option value="L1 Info-B">L1 Informatique-B</option>
                                <option value="L3 Gestion">L3 Gestion</option>
                                <option value="L2 Gestion">L2 Gestion</option>
                                <option value="L1 Gestion-A">L1 Gestion-A</option>
                                <option value="L1 Gestion-B">L1 Gestion-B</option>
                                <option value="BTL3">BTL3</option>
                                <option value="BTL2">BTL2</option>
                                <option value="BTL1">BTL1-A</option>
                                <option value="BTL1-B">BTL1-B</option>
                                <option value="L1 Droit">L1 Droit</option>                         
                               </select>
                        </div>
                        <div class="from-group mt-4">
                            <select class="form-control col-6" name="positionB" id="">   
                                <option value="...">Position à défendre</option>
                                <option value="Pour">Pour</option>
                                <option value="Contre">Contre</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
            <!--    <h4>
                    Les Jurys
                </h4>
            </div>
            <div class="row mb-1 site-section">
                <div class="col-lg-3" data-aos="fade-right">
                    <div class="author-box" data-aos="fade-left">
                        <div class="d-flex mb-4">
                            <div class="mr-auto text-black">
                                <strong class="font-weight-bold mb-0"
                                    >Jury N°1</strong>
                            </div>
                        </div>
                        <div class="from-group">
                            <label for="equipe_a">Le nom de classe</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" data-aos="fade-right">
                    <div class="author-box" data-aos="fade-left">
                        <div class="d-flex mb-4">
                            <div class="mr-auto text-black">
                                <strong class="font-weight-bold mb-0"
                                    >Jury N°2</strong>
                            </div>
                        </div>
                        <div class="from-group">
                            <label for="equipe_a">Le nom de classe</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" data-aos="fade-right">
                    <div class="author-box" data-aos="fade-left">
                        <div class="d-flex mb-4">
                            <div class="mr-auto text-black">
                                <strong class="font-weight-bold mb-0"
                                    >Jury N°3</strong>
                            </div>
                        </div>
                        <div class="from-group">
                            <label for="equipe_a">Le nom de classe</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" data-aos="fade-right">
                    <div class="author-box" data-aos="fade-left">
                        <div class="d-flex mb-4">
                            <div class="mr-auto text-black">
                                <strong class="font-weight-bold mb-0"
                                    >Jury N°4</strong>
                            </div>
                        </div>
                        <div class="from-group">
                            <label for="equipe_a">Le nom de classe</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="row mb-1 site-section">
                <div class="col-lg-6" data-aos="fade-right">
                </div> -->
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