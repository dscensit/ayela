 <!-- Global Required JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Vendor/Plugins JS -->
    <script src="assets/vendor/slick/slick.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/wowjs/wow.min.js"></script>

    <!-- Bootbox Template JS -->
    <script src="assets/js/main.js"></script>
    <script>
        // Check that service workers are supported
            if ('serviceWorker' in navigator) {
              window.addEventListener('load', () => {
                navigator.serviceWorker.register('assets/sw.js').then(registration => {
                  console.log('SW registered: ', registration);
                }).catch(registrationError => {
                });
              });
           } 
    </script>