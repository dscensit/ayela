<?php 

$find=new Find();

//$getfile=$find->getAnnonce($_GET['id']);
$all=(explode("=",$_SERVER['REQUEST_URI']));

$id=$all[1];

$data=$find->getAnnonce($id);

