<?php 


    $error="";

    $success="";

    $user=new user();

    
    if(isset($_POST['validate'])):


          
         extract($_POST);


         if(!empty($mail) and !empty($mdp)):


                 $val=verifyFieldLength($mdp,7);


                 if($val==true){

                          $mdp=sha1($mdp);

                          $user->Authentification($mail,$mdp);

                          $selfverify=$user->returnthebool();

                          if($selfverify==true) $success="<a href='home'>Go to home</a>";

                          if($selfverify==false) $error="verify your email or your password";
                            


                }else{


                      $error="password too  short";


                }



         else:


             $error="some fields     are empty";

        endif;





  





    endif;