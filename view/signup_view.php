
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

    

    <!-- START Section Sign Up -->
    <section class="bg-gradi sp-100 login-section overflow-hidden d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-11 mt-60 mx-md-auto">
                    <div class="login-box bg-white pr-lg-5 pr-0">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-6 order-md-last">
                                <div class="form-wrap bg-white">


                                    <h4 class="btm-sep pb-3 mb-5">S'inscrire</h4>
                                    
                                    <?php if($error and $error!=""): ?>


                                        <div class="alert alert-danger"><?= $error ?></div>


                                    <?php endif; ?>


                                    <?php if($success and $success!=""): ?>


                                        <div class="alert alert-dark"><?= $success ?></div>


                                    <?php endif; ?>

                                    <form class="form" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi zmdi-account"></span>
                                                    <input type="text" id="username" class="form-control"
                                                        placeholder="Nom d'utilisateur" name="pseudo">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi zmdi-email"></span>
                                                    <input type="email" id="email" class="form-control"
                                                        placeholder="Adresse e-mail" name="mail">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi zmdi-lock"></span>
                                                    <input type="password" id="password" class="form-control"
                                                        placeholder="Mot de passe" name="mdp">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button  
                                                    class="btn btn-lg btn-custom btn-dark btn-block" name="validate">
                                                    Inscription
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 order-md-first">
                                <div class="content text-center">
                                    <div class="border-bottom pb-5 mb-5">
                                        <h3 class="c-black">Vous avez déjà un compte?</h3>
                                        <a href="login" class="btn btn-custom">Se connecter</a>
                                    </div>
                                    <h5 class="c-black mb-4 mt-n1">Ou inscrivez-vous avec</h5>
                                    <div class="socials">
                                        <a href="#" class="zmdi zmdi-facebook"></a>
                                        <a href="#" class="zmdi zmdi-twitter"></a>
                                        <a href="#" class="zmdi zmdi-google"></a>
                                        <a href="#" class="zmdi zmdi-instagram"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Sign Up -->

    <!-- Global Required JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Vendor/Plugins JS -->
    <script src="assets/vendor/wowjs/wow.min.js"></script>

    
</body>
