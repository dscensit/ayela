<?php 



   $utilisateur=new user(); 

   $error="";
   $success="";
 
   if(isset($_POST['validate'])):


               extract($_POST);
                

               

               if(!empty($pseudo) and  !empty($mdp)  and !empty($mail)):
                   

                      $val=verifyFieldLength($pseudo,7);

                      if($val==true):

                                  $val=verifyFieldLength($mdp,7);

                                  if($val==true){


                                         if(filter_var($mail,FILTER_VALIDATE_EMAIL)){


            
                                              

                                               $mdp=sha1($mdp);
                                               
                                               $utilisateur->createUser($pseudo,$mdp,$mail);


                                               $good=$utilisateur->returnthebool();

                                               

                                                if($good==false )$error="email or  username are already used";

                                                if($good==true)$success="all is good";


                                           

                                         }else{


                                              $error=" please verify field mail ";


                                         }
                                   

                                  }else{
                                  
                                        $error=" please verify field password it too short";


                                  }

                      else: 

                         $error=" please verify field username it too short";


                      endif;
                else:

                      $error="some field are empty";
                   
               endif;


        
    endif;