
<body id="page-top">

    
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
 

   
    <!-- END Header -->

    <!-- START Section Page Title -->
    <?php 

       if(isset($data)):

    ?>

    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm text-center">
                    <h2 class="text-uppercase mb-4 c-white">Perdu</h2>
                    <ul class="py-3 d-flex meta mb-2 justify-content-center c-white">
                        <li class="pr-4 mr-4">
                            <i class="zmdi zmdi-pin mr-2"></i>Cocody, Saint Jean
                        </li>
                        <li class="pr-4 mr-md-4">/</li>
                        <li class="pr-4 mr-md-4">
                            <i class="zmdi zmdi-file-text mr-2"></i>Carte d'identité
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Page Title -->

    <!-- START Section Career -->
    <section class="career-single bg-white sp-100">
        <div class="container">
            <div class="row">
                <!-- START Right Side-->
                <div class="col-lg-4 order-lg-2">
                    <div class="job-overview mb-60">
                        <h4 class="career-title mb-0">Détail du document</h4>
                        <div class="overview-bottom job-detail text-center">
                            <ul class="ff-open-sans mx-3 mx-xl-5 text-left">
                                <li>
                                    <div class="nom-du-proprietaire">Nom: <?= $data->nom."  ".$data->prenom?></div>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-pin zmdi-hc-fw mr-2"></i><?= $data->commune.",".$data->lieu ?>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-file-text zmdi-hc-fw mr-2"></i><?= $data->type_document?>
                                </li>

                                <li>
                                    <i  class="zmdi zmdi-phone zmdi-hc-fw mr-2"></i> <a href="tel:<?=$data->telephone?>"><?= $data->telephone?></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-lg btn-block btn-custom">Récupérer</a>
                        </div>
                    </div>
                </div>
                <!-- END Right Side-->

                <!-- START Left Side-->
                <div class="col-lg-8 order-lg-1">
                    <div class="career-content-box mb-60">
                        <div class="title-left">
                            <h4 class="top-sep mb-30">Description</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="career-content-box mb-60">
                        <div class="title-left">
                            <h4 class="top-sep mb-30">Image du document</h4>
                        </div>
                        <div>
                            <img class="image-document" src="<?="images/".$data->photo ?>" alt="" width="400" height="400   ">
                        </div>
                    </div>
                </div>
                <!-- END Left Side-->
               <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- END Section Career -->

   


    <!-- START Scroll-To-Top -->
    <a id="back-top" class="back-top" href="javascript:void(0)">
        <span class="zmdi zmdi-triangle-up mb-1"></span>
    </a>
    <!-- END Scroll-To-Top -->
    
    <!-- Global Required JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Vendor/Plugins JS -->
    <script src="vendor/wowjs/wow.min.js"></script>

    <!-- Bootbox Template JS -->
    <script src="js/main.js"></script>
    <script>
        // Check that service workers are supported
            if ('serviceWorker' in navigator) {
              window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js').then(registration => {
                  console.log('SW registered: ', registration);
                }).catch(registrationError => {
                });
              });
           } 
    </script>
</body>

</html>