<?php

// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

//!\\ A enlever lors du déploiement
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', true);


// --------------------------- //
//          SESSIONS           //
// --------------------------- //
session_start();
ini_set('session.cookie_lifetime', false);



// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)

// Website informations
define("WEBSITE_TITLE", "AYELA");
define("WEBSITE_NAME", "AYELA");
define("WEBSITE_URL", "https://ayela-81f9a.web.app");
define("WEBSITE_DESCRIPTION", "Service gratuit pour retrouver document perdu. Que vous ayez perdu votre Attestation, votre CNI, votre Passeport et votre Assurance.");
define("WEBSITE_KEYWORDS", "ayela,catre d'identité, perte de document, permis de conduite, carte cni");
define("WEBSITE_LANGUAGE", "fr");
define("WEBSITE_AUTHOR", "DSC ENSIT");
define("WEBSITE_AUTHOR_MAIL", "dscensit@gmail.com");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

// DataBase informations
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "ayela");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");


//gestion des langues

define("DEFAULT_LANGUAGE","fr");