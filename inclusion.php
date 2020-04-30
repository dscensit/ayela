
<!doctype html>


<html lang="fr-FR">


<?php 

                       include_once '__classes/user.php';
                       
                       include_once '__classes/point.php' ;

                       include_once '__config/connection.php';

                       include_once 'view/includes/head.php'; 

                       include_once '__function/title.php';


                        $redirect=new redirect();
                    
                        $redirect->getRedirection();

                        if($redirect->getHost()!="404" and $redirect->getHost()!="login" and $redirect->getHost()!="signup" and $redirect->getHost()!="home"){


                               include_once 'view/includes/navbar.php';

                               include_once 'view/includes/footer.php';
                       
                       }
                       if($redirect->getHost()=="home" and $redirect->getHost()=="home"){
                               
                                include_once 'view/includes/footer.php';

                       }
                        include_once 'view/includes/script.php';

                        include_once '__config/config.php';

                        include_once '__config/connection.php';

                     ?>

                        <title><?= returnTitle(); ?></title>

 </html>


