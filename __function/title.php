<?php 






//la fonction qui retourne le title de la page a affiché

function returnTitle(){


     $title="";

  
     if($_SERVER["REQUEST_URI"]=="/ayela/login"):


     	 $title= "Login | AYELA Service";


     endif;


     if($_SERVER["REQUEST_URI"]=="/ayela" or $_SERVER["REQUEST_URI"]=="/ayela/" or $_SERVER["REQUEST_URI"]=="/ayela/home"):



        $title= " Accueil | AYELA service";


     endif;


     if($_SERVER["REQUEST_URI"]=="/ayela/document"):


          $title= " Document | AYELA service";
          

     endif;

     if($_SERVER["REQUEST_URI"]=="/ayela/annonce"):


          $title= " Annonce | AYELA service";
          

     endif;

     if($_SERVER["REQUEST_URI"]=="/ayela/find"):


          $title= " Retrouve | AYELA service";
          

     endif;

    
     if($_SERVER["REQUEST_URI"]=="/ayela/perdu"):


          $title= " Perdu | AYELA service";
          

     endif;


     if($_SERVER["REQUEST_URI"]=="/ayela/signup"):


          $title= " Signup | AYELA service";
          

     endif;

 


    return ( $title!= "")?$title:"Error | AYELA service";


}



//la fonction qui permet de retourner le message d'erreur
function returnError($message){

         
         return "<div class=\"alert alert-danger\">".$message."</div>";

}

//fonction pour les messages de success 
//on pouvais couplé avec la premiere fonction


function returnSuccess($message){
     

     return "<div class=\"alert alert-success\">".$message."</div>";

}

//fonction qui permet de verifier la taille des champs entrez 
//on defini une taille si la taille du champs entrez est inferieure a la taille que l'on veux on revoi false
//afin de pouvoir gerer les messages d'erreur

function verifyFieldLength($field,$size){


   $correct=true;


   if(gettype($field)=="string" and gettype($size)=='integer'):

         if(strlen($field)>=$size){


                $correct=true;

         }else{


                 $correct=false;
         }

   else:


        echo "we cannot do it ";

   endif;


        return $correct;


}




?>