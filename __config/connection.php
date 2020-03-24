<?php 

include 'config.php';
 try{


    $database= new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);

 }catch(Exception $e){


    die("Erreur lors de la connection a la base".$e->getMessage());

 }