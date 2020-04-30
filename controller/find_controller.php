<?php

$error="";



if(isset($_POST['button'])):



   
    extract($_POST);
   
    

    if(verifyInput($nom) and verifyInput($prenom) and verifyInput($type) and verifyInput($numero) 
    and verifyInput($telephone) and verifyInput($whatsapp) and verifyInput($commune) and verifyInput($lieu)):

     

         if(verifyLength($telephone,5) and verifyLength($whatsapp,5)):


            moveMyFile($_FILES);
            $fichier=$_FILES['fichier']['name'];
              
            $myfile=new Find();

             if($message=$myfile->createPublication($nom,$prenom,$numero,$fichier,$type,$telephone,$whatsapp,$commune,$lieu)):


                 $error=$message["message"];

            else:

                $error=$message["message"];
                 
            
            endif;

         
         else:

             
             $error="Votre numero de telephone est invalide";

        
         endif;
    


    else:



         $error="veuillez remplir tous les champs";
    
    endif;


endif;