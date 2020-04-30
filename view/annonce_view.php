
<body id="page-top">
    <!-- START Loader 
    <div id="preloader">
        <div class="blobs">
            <div class="blob-center"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
            <div class="blob"></div>
        </div>
    </div>
    END Loader -->

    <!-- START Header -->
   
    <!-- END Header -->

    <!-- START Section Page Title -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-uppercase mb-4 c-white">Annonce</h2>
                    <ul class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
                        <li class="breadcrumb-item active">Annonce</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Page Title -->

    <!-- START Section Career -->
    <section class="bg-white sp-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="top-c-sep">Chercher des Annonces</h3>
                        <p>Veillez entrer les détails des informations du document que vous cherchez. Si vous ne trouvez pas ce que vous cherchez, contacter notre service pour plus d'informations.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="career-search mb-60">

                        <form action="#" class="career-form mb-60">
                            <div class="row">
                                <div class="col-md-6 col-lg-3 my-3">
                                    <div class="input-group position-relative">
                                        <input type="text" class="form-control" placeholder="Entre ton nom"
                                               id="keywords">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 my-3">
                                    <div class="input-group position-relative">
                                        <input type="text" class="form-control" placeholder="Numéro de la carte"
                                               id="keywords">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 my-3">
                                    <div class="select-container">
                                        <select class="custom-select selection-color">
                                            <option value="" selected>Type de document</option>
                                            <option value="1" >Carte d'identité</option>
                                            <option value="2">Permis</option>
                                            <option value="3">Acte de naissance</option>
                                            <option value="4">Passeport</option>
                                            <option value="5">Autres</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 my-3">
                                    <button type="button" class="btn btn-lg btn-block btn-light btn-custom"
                                            id="contact-submit">
                                        Chercher
                                    </button>
                                </div>
                            </div>
                        </form>

                        <?php if(isset($all["count"])): ?>
                        <div class="filter-result">
                            <p class="mb-30 ff-montserrat">Annonce Total : <?= $all["count"] ?></p>
                            <?php foreach ($all["data"] as $data ):
                                # code..
                            ?>
                            
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                      
                                    </div>
                                    <div class="job-content">
                                        <h5 class="text-center text-md-left"><?= $data->nom."  ".$data->prenom ?></h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-pin mr-2"></i> <?= $data->commune?>
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-file-text mr-2"></i><?= $data->type_document?>
                                            </li>
                                            <li class="mr-md-4">
                                                <div class="btn-group align-content-center" role="group" aria-label="Bouton partager">
                                                    <button type="button" class="btn button-fb btn-rounded"><i class="zmdi zmdi-facebook zmdi-hc-4x"></i></button>
                                                    <button type="button" class="btn button-tw btn-rounded"><i class="zmdi zmdi-twitter"></i></button>
                                                    <button type="button" class="btn button-ln btn-rounded"><i class="zmdi zmdi-linkedin"></i></button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="document?id=<?= $data->numero_document?>" class="btn d-block w-100 d-sm-inline-block btn-custom">Détails</a>
                                </div>
                            </div>

                            <?php 
                             
                              endforeach;
                            ?>

                        <?php endif; ?>
                            
                            
                               
                            
                            
                    <!-- START Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-reset justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="zmdi zmdi-long-arrow-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">2</a></li>
                            <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END Pagination -->
                </div>
            </div>

        </div>
    </section>
    <!-- END Section Career -->

    <!-- START Section CTA -->
    <section class="cta-section position-relative">
        <div class="container">
            <div class="cta-box bg-white wow fadeInUp" data-wow-delay="0.2s">
                <h3>Développer avec ❤ par le DSC ENSIT.</h3>
                <p class="mb-30 mx-auto">Les DSC sont des groupes communautaires universitaires pour les étudiants de tous les programmes souhaitant être développeurs. Développement web et mobile , Cloud et compétences en leadership.
                </p>
                <a href="https://dsc-ensit.web.app/" class="btn btn-lg btn-custom">En savoir plus <i class="zmdi zmdi-long-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>
    <!-- END Section CTA -->