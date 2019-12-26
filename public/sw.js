/*
Copyright 2018 Google Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/

importScripts('https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js');

if (workbox) {
  console.log(`Yay! Workbox is loaded 🎉`);

  workbox.core.setCacheNameDetails({
    prefix: 'ayela',
    suffix: 'v1',
    precache: 'precache',
    runtime: 'run-time',
  });

  workbox.precaching.precacheAndRoute([
  {
    "url": "404.html",
    "revision": "c0382431804c4dad8eac990c3c8112d3"
  },
  {
    "url": "annonce.html",
    "revision": "36ffb483b44b3e0cd3930e8925b009e6"
  },
  {
    "url": "contact.html",
    "revision": "ff5451f1895a1f4a4a18d49a62efef67"
  },
  {
    "url": "css/customize.css",
    "revision": "a881ca9d945819f736944e36e77e06f7"
  },
  {
    "url": "css/document-detail.css",
    "revision": "372bdbd97e13ab9f689005b117f42cbc"
  },
  {
    "url": "css/main.css",
    "revision": "2c266ae131eaec5aedd9b7ab73ae7a13"
  },
  {
    "url": "css/mdb.min.css",
    "revision": "9f5a953eb1a63c7bab0bbf54c6e41974"
  },
  {
    "url": "document-detail.html",
    "revision": "3bfe8a79ad3932980799c31ebe2ec24b"
  },
  {
    "url": "faq.html",
    "revision": "f5d55f5f014a7d7d45bba751b940318c"
  },
  {
    "url": "fonts/flaticon/flaticon.css",
    "revision": "6b31648e7c61c3c185efa1f0918b5870"
  },
  {
    "url": "fonts/flaticon/Flaticon.eot",
    "revision": "4716d66409c91ddf43468ec803a92b4f"
  },
  {
    "url": "fonts/flaticon/Flaticon.svg",
    "revision": "e5867a0e572c0242da53ad1768f10782"
  },
  {
    "url": "fonts/flaticon/Flaticon.ttf",
    "revision": "1fdd6418ed0ad618bf20659b0b599c57"
  },
  {
    "url": "fonts/flaticon/Flaticon.woff",
    "revision": "f4c0642759ce2932b489a178a4512a95"
  },
  {
    "url": "fonts/flaticon/Flaticon.woff2",
    "revision": "e60be6ea38e46c2138e4188cc7c24ea1"
  },
  {
    "url": "img/AYELA.ico",
    "revision": "cf62bf5f568feb3c09e8fa266f8757e9"
  },
  {
    "url": "img/favicon/browserconfig.xml",
    "revision": "653d077300a12f09a69caeea7a8947f8"
  },
  {
    "url": "img/pages/error-img.svg",
    "revision": "11d650f54e0d45a532980a9191d20a7b"
  },
  {
    "url": "img/shapes/banner-bg2.svg",
    "revision": "a14d89a7d1fa28cbdb2db0cc5e39793f"
  },
  {
    "url": "img/shapes/banner-vector.svg",
    "revision": "f0b7e37268391836188d040c34f01b6b"
  },
  {
    "url": "img/shapes/bg-overlay.svg",
    "revision": "3590a2cad9affec7c8de92b4a0d09f0d"
  },
  {
    "url": "img/shapes/counter-bg.svg",
    "revision": "08d12c4ef072ccbdc1dbef6f5de5ddcd"
  },
  {
    "url": "img/shapes/danger.svg",
    "revision": "40078be4408701dd37e10bdb4a6ac229"
  },
  {
    "url": "img/shapes/error-wave1.svg",
    "revision": "281001af76bf36b4b5be6a1825b98b8b"
  },
  {
    "url": "img/shapes/error-wave2.svg",
    "revision": "f5d2a7a149775e9c479abf4b7fd1b661"
  },
  {
    "url": "img/shapes/footer-bg.svg",
    "revision": "4fff3f01302a3d3240fb105f9bee2777"
  },
  {
    "url": "img/shapes/login-wave1.svg",
    "revision": "e3acde1fc3cc91a3b2787185b67db4e2"
  },
  {
    "url": "img/shapes/login-wave2.svg",
    "revision": "b75591930ce9f16369eed2bfb7c4d1a3"
  },
  {
    "url": "img/shapes/morph1.svg",
    "revision": "c25210c0bcfddfcce34c6f7e92c9a22b"
  },
  {
    "url": "img/shapes/morph2.svg",
    "revision": "904d035e40952aadd872a60ec348ca01"
  },
  {
    "url": "index.html",
    "revision": "286cd10809588841126065bc326b5760"
  },
  {
    "url": "js/customize.js",
    "revision": "e265743b856deb5185594e51f152f3fb"
  },
  {
    "url": "js/main.js",
    "revision": "41985a28f71a57b8a4875edee3354356"
  },
  {
    "url": "js/mdb.min.js",
    "revision": "ab79ba65e04a2a6534864f59c5c7d55b"
  },
  {
    "url": "login.html",
    "revision": "f4c086aa2d5dc47bbcd04a4a89e1b146"
  },
  {
    "url": "manifest.json",
    "revision": "4579a82b27826eb7d3bdc981857b24e4"
  },
  {
    "url": "perdu.html",
    "revision": "877a7d03aadf633eda87ec9b09007a9f"
  },
  {
    "url": "public/404.html",
    "revision": "c0382431804c4dad8eac990c3c8112d3"
  },
  {
    "url": "public/annonce.html",
    "revision": "683b73f6d02857b6ed92e174d73a6221"
  },
  {
    "url": "public/contact.html",
    "revision": "3f2a7f20ee120995f010fecaba4f9b3c"
  },
  {
    "url": "public/css/customize.css",
    "revision": "a881ca9d945819f736944e36e77e06f7"
  },
  {
    "url": "public/css/document-detail.css",
    "revision": "372bdbd97e13ab9f689005b117f42cbc"
  },
  {
    "url": "public/css/main.css",
    "revision": "2c266ae131eaec5aedd9b7ab73ae7a13"
  },
  {
    "url": "public/css/mdb.min.css",
    "revision": "9f5a953eb1a63c7bab0bbf54c6e41974"
  },
  {
    "url": "public/document-detail.html",
    "revision": "4fb3df39beebbff0a3374333d272b168"
  },
  {
    "url": "public/faq.html",
    "revision": "8b2485a6534f459b11e3864866df945d"
  },
  {
    "url": "public/fonts/flaticon/flaticon.css",
    "revision": "6b31648e7c61c3c185efa1f0918b5870"
  },
  {
    "url": "public/fonts/flaticon/Flaticon.eot",
    "revision": "4716d66409c91ddf43468ec803a92b4f"
  },
  {
    "url": "public/fonts/flaticon/Flaticon.svg",
    "revision": "e5867a0e572c0242da53ad1768f10782"
  },
  {
    "url": "public/fonts/flaticon/Flaticon.ttf",
    "revision": "1fdd6418ed0ad618bf20659b0b599c57"
  },
  {
    "url": "public/fonts/flaticon/Flaticon.woff",
    "revision": "f4c0642759ce2932b489a178a4512a95"
  },
  {
    "url": "public/fonts/flaticon/Flaticon.woff2",
    "revision": "e60be6ea38e46c2138e4188cc7c24ea1"
  },
  {
    "url": "public/img/AYELA.ico",
    "revision": "cf62bf5f568feb3c09e8fa266f8757e9"
  },
  {
    "url": "public/img/favicon/browserconfig.xml",
    "revision": "653d077300a12f09a69caeea7a8947f8"
  },
  {
    "url": "public/img/pages/error-img.svg",
    "revision": "11d650f54e0d45a532980a9191d20a7b"
  },
  {
    "url": "public/img/shapes/banner-bg2.svg",
    "revision": "a14d89a7d1fa28cbdb2db0cc5e39793f"
  },
  {
    "url": "public/img/shapes/banner-vector.svg",
    "revision": "f0b7e37268391836188d040c34f01b6b"
  },
  {
    "url": "public/img/shapes/bg-overlay.svg",
    "revision": "3590a2cad9affec7c8de92b4a0d09f0d"
  },
  {
    "url": "public/img/shapes/counter-bg.svg",
    "revision": "08d12c4ef072ccbdc1dbef6f5de5ddcd"
  },
  {
    "url": "public/img/shapes/danger.svg",
    "revision": "40078be4408701dd37e10bdb4a6ac229"
  },
  {
    "url": "public/img/shapes/error-wave1.svg",
    "revision": "281001af76bf36b4b5be6a1825b98b8b"
  },
  {
    "url": "public/img/shapes/error-wave2.svg",
    "revision": "f5d2a7a149775e9c479abf4b7fd1b661"
  },
  {
    "url": "public/img/shapes/footer-bg.svg",
    "revision": "4fff3f01302a3d3240fb105f9bee2777"
  },
  {
    "url": "public/img/shapes/login-wave1.svg",
    "revision": "e3acde1fc3cc91a3b2787185b67db4e2"
  },
  {
    "url": "public/img/shapes/login-wave2.svg",
    "revision": "b75591930ce9f16369eed2bfb7c4d1a3"
  },
  {
    "url": "public/img/shapes/morph1.svg",
    "revision": "c25210c0bcfddfcce34c6f7e92c9a22b"
  },
  {
    "url": "public/img/shapes/morph2.svg",
    "revision": "904d035e40952aadd872a60ec348ca01"
  },
  {
    "url": "public/index.html",
    "revision": "286cd10809588841126065bc326b5760"
  },
  {
    "url": "public/js/customize.js",
    "revision": "e265743b856deb5185594e51f152f3fb"
  },
  {
    "url": "public/js/main.js",
    "revision": "41985a28f71a57b8a4875edee3354356"
  },
  {
    "url": "public/js/mdb.min.js",
    "revision": "ab79ba65e04a2a6534864f59c5c7d55b"
  },
  {
    "url": "public/login.html",
    "revision": "f4c086aa2d5dc47bbcd04a4a89e1b146"
  },
  {
    "url": "public/manifest.json",
    "revision": "4579a82b27826eb7d3bdc981857b24e4"
  },
  {
    "url": "public/perdu.html",
    "revision": "877a7d03aadf633eda87ec9b09007a9f"
  },
  {
    "url": "public/retrouve.html",
    "revision": "d1bafbc3fdbc61fd6cfbf51c1938834c"
  },
  {
    "url": "public/scss/career.scss",
    "revision": "7ea06977d8e990bee6224984a7e7879d"
  },
  {
    "url": "public/scss/contact.scss",
    "revision": "d98ef796bb89672c69037c4467ac695d"
  },
  {
    "url": "public/scss/custom.scss",
    "revision": "57e4b86b257bedd2d867a6062a08ab04"
  },
  {
    "url": "public/scss/custom/_custom-styles.scss",
    "revision": "002bc64bc704ab6517284909a45de609"
  },
  {
    "url": "public/scss/custom/_custom-variables.scss",
    "revision": "bd5c9838830e45dbb8874b6e815b7064"
  },
  {
    "url": "public/scss/elements.scss",
    "revision": "d236e72b115e2511770f8da97e809876"
  },
  {
    "url": "public/scss/error.scss",
    "revision": "f70c2a83f9f724e1d06f139353d28d20"
  },
  {
    "url": "public/scss/faq.scss",
    "revision": "7f1e53feffd5732c031e68bb2aeccae5"
  },
  {
    "url": "public/scss/home.scss",
    "revision": "a666933bdf122708dac8375872134b3f"
  },
  {
    "url": "public/scss/includes/animation.scss",
    "revision": "cbf53d851290e7470eca84bba42a08b8"
  },
  {
    "url": "public/scss/includes/footer.scss",
    "revision": "9025146e129ea8a55975cc430db52e44"
  },
  {
    "url": "public/scss/includes/header.scss",
    "revision": "81c906d89386cf8724f8258b9ddc8eb4"
  },
  {
    "url": "public/scss/includes/nav.scss",
    "revision": "b06ac2156a57777d9b34ee792a08daa5"
  },
  {
    "url": "public/scss/includes/reset.scss",
    "revision": "e9d92f4f01f67ee9e2ecdc7db84e4c1c"
  },
  {
    "url": "public/scss/login.scss",
    "revision": "552d8d23ed3dfd3d4b1b9a3f1eb2e9c4"
  },
  {
    "url": "public/scss/main.scss",
    "revision": "9a1c723287b45e75f48bd06e11b64e01"
  },
  {
    "url": "public/scss/variables.scss",
    "revision": "5cec585885e53bd8bdddf44c3269e69f"
  },
  {
    "url": "public/sign-up.html",
    "revision": "4e82da0efcd127bc0d86454dd7340fb7"
  },
  {
    "url": "public/vendor/animate-css/animate.css",
    "revision": "91cc40989e5e96e8d6bddc0f19598441"
  },
  {
    "url": "public/vendor/animate-css/animate.min.css",
    "revision": "bc1a6a99c43f5ccc97d2d350bde13f74"
  },
  {
    "url": "public/vendor/bootstrap/css/bootstrap-grid.css",
    "revision": "59e3488e09a8bc96de5884586f3c67ec"
  },
  {
    "url": "public/vendor/bootstrap/css/bootstrap-grid.min.css",
    "revision": "7aba9868c6ffadaf2c45d1bafe86d2c3"
  },
  {
    "url": "public/vendor/bootstrap/css/bootstrap-reboot.css",
    "revision": "b53d1eaf9daeab26f2772281ae060120"
  },
  {
    "url": "public/vendor/bootstrap/css/bootstrap-reboot.min.css",
    "revision": "220e4dc01283a9e9c5c146f984eb8934"
  },
  {
    "url": "public/vendor/bootstrap/css/bootstrap.css",
    "revision": "bd551f56ce2be3eba2812e605ab4f5b2"
  },
  {
    "url": "public/vendor/bootstrap/css/bootstrap.min.css",
    "revision": "a15c2ac3234aa8f6064ef9c1f7383c37"
  },
  {
    "url": "public/vendor/bootstrap/js/bootstrap.bundle.js",
    "revision": "a9247b1fe21ee409d0b37e74100de687"
  },
  {
    "url": "public/vendor/bootstrap/js/bootstrap.bundle.min.js",
    "revision": "a454220fc07088bf1fdd19313b6bfd50"
  },
  {
    "url": "public/vendor/bootstrap/js/bootstrap.js",
    "revision": "7f827fe484ec04346553202782b0664b"
  },
  {
    "url": "public/vendor/bootstrap/js/bootstrap.min.js",
    "revision": "e1d98d47689e00f8ecbc5d9f61bdb42e"
  },
  {
    "url": "public/vendor/isotope-layout/isotope.pkgd.js",
    "revision": "8896e082b3fa1738e2e2f558a7fc1fa4"
  },
  {
    "url": "public/vendor/isotope-layout/isotope.pkgd.min.js",
    "revision": "2afcff647ed260006faa71c8e779e8d4"
  },
  {
    "url": "public/vendor/jquery/core.js",
    "revision": "0bcb7ccc3d7603c2035e5cd3b93dc2bf"
  },
  {
    "url": "public/vendor/jquery/jquery.js",
    "revision": "11c05eb286ed576526bf4543760785b9"
  },
  {
    "url": "public/vendor/jquery/jquery.min.js",
    "revision": "220afd743d9e9643852e31a135a9f3ae"
  },
  {
    "url": "public/vendor/jquery/jquery.slim.js",
    "revision": "1a94b73b4b451a7872de5d76f57024e4"
  },
  {
    "url": "public/vendor/jquery/jquery.slim.min.js",
    "revision": "d9b11ca4d877c327889805b73bb79edd"
  },
  {
    "url": "public/vendor/magnific-popup/jquery.magnific-popup.js",
    "revision": "5b23ded83b6a631b06040ed574e43dd6"
  },
  {
    "url": "public/vendor/magnific-popup/jquery.magnific-popup.min.js",
    "revision": "ba6cf724c8bb1cf5b084e79ff230626e"
  },
  {
    "url": "public/vendor/magnific-popup/magnific-popup.css",
    "revision": "30b593b71d7672658f89bfea0ab360c9"
  },
  {
    "url": "public/vendor/material-design-iconic-font/css/material-design-iconic-font.css",
    "revision": "612a746cc755cfd3ceace05a85ab0da5"
  },
  {
    "url": "public/vendor/material-design-iconic-font/css/material-design-iconic-font.min.css",
    "revision": "e9365fe85b7e4db79a87015e52c3db6c"
  },
  {
    "url": "public/vendor/material-design-iconic-font/fonts/Material-Design-Iconic-Font.eot",
    "revision": "e833b2e2471274c238c0553f11031e6a"
  },
  {
    "url": "public/vendor/material-design-iconic-font/fonts/Material-Design-Iconic-Font.svg",
    "revision": "381f7754080ed2299a7c66a2504dff02"
  },
  {
    "url": "public/vendor/material-design-iconic-font/fonts/Material-Design-Iconic-Font.ttf",
    "revision": "b351bd62abcd96e924d9f44a3da169a7"
  },
  {
    "url": "public/vendor/material-design-iconic-font/fonts/Material-Design-Iconic-Font.woff",
    "revision": "d2a55d331bdd1a7ea97a8a1fbb3c569c"
  },
  {
    "url": "public/vendor/material-design-iconic-font/fonts/Material-Design-Iconic-Font.woff2",
    "revision": "a4d31128b633bc0b1cc1f18a34fb3851"
  },
  {
    "url": "public/vendor/slick/fonts/slick.eot",
    "revision": "ced611daf7709cc778da928fec876475"
  },
  {
    "url": "public/vendor/slick/fonts/slick.svg",
    "revision": "f97e3bbf73254b0112091d0192f17aec"
  },
  {
    "url": "public/vendor/slick/fonts/slick.ttf",
    "revision": "d41f55a78e6f49a5512878df1737e58a"
  },
  {
    "url": "public/vendor/slick/fonts/slick.woff",
    "revision": "b7c9e1e479de3b53f1e4e30ebac2403a"
  },
  {
    "url": "public/vendor/slick/slick-theme.css",
    "revision": "f9faba678c4d6dcfdde69e5b11b37a2e"
  },
  {
    "url": "public/vendor/slick/slick-theme.scss",
    "revision": "e97dc549d5450ebd34fe128eefc69cd6"
  },
  {
    "url": "public/vendor/slick/slick.css",
    "revision": "f38b2db10e01b1572732a3191d538707"
  },
  {
    "url": "public/vendor/slick/slick.js",
    "revision": "483a3731bbe7046c1da3163da76dbe98"
  },
  {
    "url": "public/vendor/slick/slick.min.js",
    "revision": "d5a61c749e44e47159af8a6579dda121"
  },
  {
    "url": "public/vendor/slick/slick.scss",
    "revision": "f5309cf6905194850b44fb78b8028b95"
  },
  {
    "url": "public/vendor/wowjs/wow.js",
    "revision": "6d1de87eaba3bea986f91e344de80b50"
  },
  {
    "url": "public/vendor/wowjs/wow.min.js",
    "revision": "ca842c56b08ae9a1e4e908ec721f4494"
  },
  {
    "url": "retrouve.html",
    "revision": "d1bafbc3fdbc61fd6cfbf51c1938834c"
  },
  {
    "url": "scss/career.scss",
    "revision": "7ea06977d8e990bee6224984a7e7879d"
  },
  {
    "url": "scss/contact.scss",
    "revision": "d98ef796bb89672c69037c4467ac695d"
  },
  {
    "url": "scss/custom.scss",
    "revision": "57e4b86b257bedd2d867a6062a08ab04"
  },
  {
    "url": "scss/custom/_custom-styles.scss",
    "revision": "002bc64bc704ab6517284909a45de609"
  },
  {
    "url": "scss/custom/_custom-variables.scss",
    "revision": "bd5c9838830e45dbb8874b6e815b7064"
  },
  {
    "url": "scss/elements.scss",
    "revision": "d236e72b115e2511770f8da97e809876"
  },
  {
    "url": "scss/error.scss",
    "revision": "f70c2a83f9f724e1d06f139353d28d20"
  },
  {
    "url": "scss/faq.scss",
    "revision": "7f1e53feffd5732c031e68bb2aeccae5"
  },
  {
    "url": "scss/home.scss",
    "revision": "a666933bdf122708dac8375872134b3f"
  },
  {
    "url": "scss/includes/animation.scss",
    "revision": "cbf53d851290e7470eca84bba42a08b8"
  },
  {
    "url": "scss/includes/footer.scss",
    "revision": "9025146e129ea8a55975cc430db52e44"
  },
  {
    "url": "scss/includes/header.scss",
    "revision": "81c906d89386cf8724f8258b9ddc8eb4"
  },
  {
    "url": "scss/includes/nav.scss",
    "revision": "b06ac2156a57777d9b34ee792a08daa5"
  },
  {
    "url": "scss/includes/reset.scss",
    "revision": "e9d92f4f01f67ee9e2ecdc7db84e4c1c"
  },
  {
    "url": "scss/login.scss",
    "revision": "552d8d23ed3dfd3d4b1b9a3f1eb2e9c4"
  },
  {
    "url": "scss/main.scss",
    "revision": "9a1c723287b45e75f48bd06e11b64e01"
  },
  {
    "url": "scss/variables.scss",
    "revision": "5cec585885e53bd8bdddf44c3269e69f"
  },
  {
    "url": "sign-up.html",
    "revision": "4e82da0efcd127bc0d86454dd7340fb7"
  },
  {
    "url": "vendor/animate-css/animate.css",
    "revision": "91cc40989e5e96e8d6bddc0f19598441"
  },
  {
    "url": "vendor/animate-css/animate.min.css",
    "revision": "bc1a6a99c43f5ccc97d2d350bde13f74"
  },
  {
    "url": "vendor/bootstrap/css/bootstrap-grid.css",
    "revision": "59e3488e09a8bc96de5884586f3c67ec"
  },
  {
    "url": "vendor/bootstrap/css/bootstrap-grid.min.css",
    "revision": "7aba9868c6ffadaf2c45d1bafe86d2c3"
  },
  {
    "url": "vendor/bootstrap/css/bootstrap-reboot.css",
    "revision": "b53d1eaf9daeab26f2772281ae060120"
  },
  {
    "url": "vendor/bootstrap/css/bootstrap-reboot.min.css",
    "revision": "220e4dc01283a9e9c5c146f984eb8934"
  },
  {
    "url": "vendor/bootstrap/css/bootstrap.css",
    "revision": "bd551f56ce2be3eba2812e605ab4f5b2"
  },
  {
    "url": "vendor/bootstrap/css/bootstrap.min.css",
    "revision": "a15c2ac3234aa8f6064ef9c1f7383c37"
  },
  {
    "url": "vendor/bootstrap/js/bootstrap.bundle.js",
    "revision": "a9247b1fe21ee409d0b37e74100de687"
  },
  {
    "url": "vendor/bootstrap/js/bootstrap.bundle.min.js",
    "revision": "a454220fc07088bf1fdd19313b6bfd50"
  },
  {
    "url": "vendor/bootstrap/js/bootstrap.js",
    "revision": "7f827fe484ec04346553202782b0664b"
  },
  {
    "url": "vendor/bootstrap/js/bootstrap.min.js",
    "revision": "e1d98d47689e00f8ecbc5d9f61bdb42e"
  },
  {
    "url": "vendor/isotope-layout/isotope.pkgd.js",
    "revision": "8896e082b3fa1738e2e2f558a7fc1fa4"
  },
  {
    "url": "vendor/isotope-layout/isotope.pkgd.min.js",
    "revision": "2afcff647ed260006faa71c8e779e8d4"
  },
  {
    "url": "vendor/jquery/core.js",
    "revision": "0bcb7ccc3d7603c2035e5cd3b93dc2bf"
  },
  {
    "url": "vendor/jquery/jquery.js",
    "revision": "11c05eb286ed576526bf4543760785b9"
  },
  {
    "url": "vendor/jquery/jquery.min.js",
    "revision": "220afd743d9e9643852e31a135a9f3ae"
  },
  {
    "url": "vendor/jquery/jquery.slim.js",
    "revision": "1a94b73b4b451a7872de5d76f57024e4"
  },
  {
    "url": "vendor/jquery/jquery.slim.min.js",
    "revision": "d9b11ca4d877c327889805b73bb79edd"
  },
  {
    "url": "vendor/magnific-popup/jquery.magnific-popup.js",
    "revision": "5b23ded83b6a631b06040ed574e43dd6"
  },
  {
    "url": "vendor/magnific-popup/jquery.magnific-popup.min.js",
    "revision": "ba6cf724c8bb1cf5b084e79ff230626e"
  },
  {
    "url": "vendor/magnific-popup/magnific-popup.css",
    "revision": "30b593b71d7672658f89bfea0ab360c9"
  },
  {
    "url": "vendor/material-design-iconic-font/css/material-design-iconic-font.css",
    "revision": "612a746cc755cfd3ceace05a85ab0da5"
  },
  {
    "url": "vendor/material-design-iconic-font/css/material-design-iconic-font.min.css",
    "revision": "e9365fe85b7e4db79a87015e52c3db6c"
  },
  {
    "url": "vendor/material-design-iconic-font/fonts/Material-Design-Iconic-Font.eot",
    "revision": "e833b2e2471274c238c0553f11031e6a"
  },
  {
    "url": "vendor/material-design-iconic-font/fonts/Material-Design-Iconic-Font.svg",
    "revision": "381f7754080ed2299a7c66a2504dff02"
  },
  {
    "url": "vendor/material-design-iconic-font/fonts/Material-Design-Iconic-Font.ttf",
    "revision": "b351bd62abcd96e924d9f44a3da169a7"
  },
  {
    "url": "vendor/material-design-iconic-font/fonts/Material-Design-Iconic-Font.woff",
    "revision": "d2a55d331bdd1a7ea97a8a1fbb3c569c"
  },
  {
    "url": "vendor/material-design-iconic-font/fonts/Material-Design-Iconic-Font.woff2",
    "revision": "a4d31128b633bc0b1cc1f18a34fb3851"
  },
  {
    "url": "vendor/slick/fonts/slick.eot",
    "revision": "ced611daf7709cc778da928fec876475"
  },
  {
    "url": "vendor/slick/fonts/slick.svg",
    "revision": "f97e3bbf73254b0112091d0192f17aec"
  },
  {
    "url": "vendor/slick/fonts/slick.ttf",
    "revision": "d41f55a78e6f49a5512878df1737e58a"
  },
  {
    "url": "vendor/slick/fonts/slick.woff",
    "revision": "b7c9e1e479de3b53f1e4e30ebac2403a"
  },
  {
    "url": "vendor/slick/slick-theme.css",
    "revision": "f9faba678c4d6dcfdde69e5b11b37a2e"
  },
  {
    "url": "vendor/slick/slick-theme.scss",
    "revision": "e97dc549d5450ebd34fe128eefc69cd6"
  },
  {
    "url": "vendor/slick/slick.css",
    "revision": "f38b2db10e01b1572732a3191d538707"
  },
  {
    "url": "vendor/slick/slick.js",
    "revision": "483a3731bbe7046c1da3163da76dbe98"
  },
  {
    "url": "vendor/slick/slick.min.js",
    "revision": "d5a61c749e44e47159af8a6579dda121"
  },
  {
    "url": "vendor/slick/slick.scss",
    "revision": "f5309cf6905194850b44fb78b8028b95"
  },
  {
    "url": "vendor/wowjs/wow.js",
    "revision": "6d1de87eaba3bea986f91e344de80b50"
  },
  {
    "url": "vendor/wowjs/wow.min.js",
    "revision": "ca842c56b08ae9a1e4e908ec721f4494"
  }
]);

   // Cache the Google Fonts stylesheets with a stale while revalidate strategy.
    workbox.routing.registerRoute(
      /^https:\/\/fonts\.googleapis\.com/,
      new workbox.strategies.StaleWhileRevalidate({
      cacheName: 'google-fonts-stylesheets',
     }),
    );

   // Cache the Google Fonts webfont files with a cache first strategy for 1 year.
    workbox.routing.registerRoute(
      /^https:\/\/fonts\.gstatic\.com/,
      new workbox.strategies.CacheFirst({
      cacheName: 'google-fonts-webfonts',
      plugins: [
        new workbox.cacheableResponse.Plugin({
          statuses: [0, 200],
        }),
        new workbox.expiration.Plugin({
          maxAgeSeconds: 60 * 60 * 24 * 365,
        }),
      ],
      }),
    ); 
    workbox.routing.registerRoute(
      new RegExp('/css/'),
      new workbox.strategies.StaleWhileRevalidate({
        cacheName: 'css-cache',
        plugins: [
          new workbox.expiration.Plugin({
            // Only cache requests for a week
            maxAgeSeconds: 15 * 24 * 60 * 60,
            // Only cache requests.
            maxEntries: 10,
          }),
        ]
      })
    );

    workbox.routing.registerRoute(
      new RegExp('/js/'),
      new workbox.strategies.StaleWhileRevalidate({
        cacheName: 'js-cache',
        plugins: [
          new workbox.expiration.Plugin({
            // Only cache requests for a week
            maxAgeSeconds: 30 * 24 * 60 * 60,
            // Only cache requests.
            maxEntries: 14,
          }),
        ]
      })
    );

    workbox.routing.registerRoute(
      new RegExp('/images/'),
      new workbox.strategies.CacheFirst({
        cacheName: 'image-cache',
        plugins: [
          new workbox.expiration.Plugin({
            // Only cache requests for a week
            maxAgeSeconds: 30 * 24 * 60 * 60,
            // Only cache 10 requests.
            maxEntries: 40,
          }),
        ]
      })
    );

} else {
  console.log(`Boo! Workbox didn't load 😬`);
}