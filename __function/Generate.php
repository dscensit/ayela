<?php 


//namespace App\function\generateKey\;

  

function generateKey(){


  $mot=['_','@','-','!','#'];

  $alphatet=['a','b','c','d','e','f','g','h','i','j','k','m','n','o','p','q','r','s','t','u','w','x','y','z'];

  $number=[0,1,2,3,4,5,6,7,8,9];


  $mykey=$mot.$alphatet.$number.$alphatet;

  $mykey=rand($mykey);



  echo $rand;



}



function verifyInput($field){



  return (isset($field) and !empty($field))?true:false;


  
}


function moveMyFile($file){


  if(isset($file)){



    $name=$_FILES['fichier']['name'];
    $file_extension=strrchr($name, ".");
    $temp=$_FILES['fichier']['tmp_name'];
    $extension_autorise=array('.jpg','.JPG','.jpeg','.PNG','.png');
    $file_dest='images/'.$name;
    if(in_array($file_extension, $extension_autorise)){
  
         if(move_uploaded_file($temp, $file_dest)){
           
          try{
             
            return true;
          
         }catch(Exception $e){
           
          return false;
         }
     }
  
    }
    else{
      return  false;
    }
  
  }


 
  




}

function encodeField($field){

  return htmlspecialchars(trim($field));
  
}



function verifyLength($field,$size){



  if(is_integer($size)):

      if(is_string($field)):

         
            if(strlen($file)<$size):

               return true;


            else:

               return false;


            endif;


      endif;

  endif;


}