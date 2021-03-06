
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
  

    

    <!-- START Section Page Title -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-uppercase mb-4 c-white">Documents perdu</h2>
                    <ul class="breadcrumb mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="home">Acceuil</a></li>
                        <li class="breadcrumb-item active">Documents perdu </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END Section Page Title -->
        
    <!-- END Header -->
    <div class="container content-form">
         <div class="">
            <h5 class="card-header soumettre-color white-text text-center py-4">
                <strong>Soumettre</strong>
              </h5>
              <!-- Form -->
            <?php if(isset($error) and $error!=""):

           ?>
            <br>

            <div class="alert alert-dark">

               <?= $error ?>
            
            </div>
        
            <?php  endif; ?>
          <form class="text-center" style="color: #757575;" action="#!" method="post" enctype="multipart/form-data">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" name="nom" class="form-control" required>
                        <label for="materialRegisterFormFirstName">Nom*</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" name="prenom" class="form-control" required>
                        <label for="materialRegisterFormLastName">Prénoms*</label>
                    </div>
                </div>
            </div>
            <div class="col">
             <div class="md-form mt-0">
              <span>Type du document</span>
              <select class="mdb-select" required name="type">
                  <option value="" disabled></option>
                  <option value="carte d'identité" selected>Carte d'identité</option>
                  <option value="permis">Permis</option>
                  <option value="Acte de naissance">Acte de naissance</option>
                  <option value="Passeport">Passeport</option>
                  <option value="Autres">Autres</option>
              </select>
  
            </div>
            </div>
            <!-- Numéro du document -->
            <div class="md-form mt-0">
                <input type="text" id="materialRegisterFormIDdoc"  name="numero" class="form-control" required>
                <label for="materialRegisterFormIDdoc">Numéro du document*</label>
            </div>
  
            <div class="col">
              <div class="file-field md-form">
                  <div class="d-flex justify-content-center">
                    <div class="btn btn-mdb-color btn-rounded float-left">
                      <span>Photo du document</span>
                      <input type="file" name="fichier">
                    </div>
                  </div>
                </div>
            </div>
  
            <div class="form-row">
              <div class="col">
                  <!-- Phone -->
                  <div class="md-form">
                      <input type="text" id="materialRegisterFormFirstPhone" name="telephone" class="form-control" required>
                      <label for="materialRegisterFormFirstPhone">Téléphone*</label>
                  </div>
              </div>
              <div class="col">
                  <!-- Whatsapp -->
                  <div class="md-form">
                      <input type="text" name="whatsapp" id="materialRegisterFormLastWhatsapp" class="form-control">
                      <label for="materialRegisterFormLastWhatsapp">Whatsapp</label>
                  </div>
              </div>
          </div>
          <div class="form-row">
            <div class="col">
                <!-- Commune -->
                <div class="md-form">
                    <input type="text" name="commune" id="materialRegisterFormFirstCommune" class="form-control" required>
                    <label for="materialRegisterFormFirstCommune">Commune*</label>
                </div>
            </div>
            <div class="col">
                <!-- Lieu -->
                <div class="md-form">
                    <input type="text" name="lieu" id="materialRegisterFormLieu" class="form-control">
                    <label for="materialRegisterFormLieu">Lieu</label>
                </div>
            </div>
        </div>
  
            <!-- Newsletter -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                <label class="form-check-label" for="materialRegisterFormNewsletter">Abonnez-vous à notre newsletter</label>
            </div>

            <!-- Sign up button -->
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm">
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="button">Soumettre</button>
                </div>
                <div class="col-sm"></div>
              </div>
  
            <!-- Terms of service -->
            <p>En cliquant
                <em>s'inscrire</em> vous acceptez notre
                <a href="" target="_blank">conditions d'utilisation</a>
  
          </form>
          <!-- Form -->
         </div>
    </div>

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

    <!-- START Scroll-To-Top -->
    <a id="back-top" class="back-top" href="javascript:void(0)">
        <span class="zmdi zmdi-triangle-up mb-1"></span>
    </a>
    <!-- END Scroll-To-Top -->

    <!-- Global Required JS -->
    <script type="text/javascript" src="assets/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/vendor/bootstrap/js/bootstra.min.js"></script>

    <!-- Vendor/Plugins JS -->
    <script type="text/javascript" src="assets/vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="assets/vendor/wowjs/wow.min.js"></script>

    <!-- Bootbox Template JS -->
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
</body>
