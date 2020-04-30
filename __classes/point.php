<?php 

class redirect{


       private $host;
       private $redirection;


    /*****************************************************************************/

    public function verify(){

             $boolean=false;


             if(isset($_GET['page'])and !empty($_GET['page'])):

                      $boolean=true;
                      $mypage=$this->secure($_GET['page']);
             else:

                       $boolean=false;
                       $mypage=$this->secure("home");


             endif;

              return [$boolean,$mypage];

    }

    /*****************************************************************************/
    public function __construct(){


           $value=$this->verify();

           $this->host=$value[1];

           
    }

    public function getRedirection(){

 
             $allpages=scandir("controller/");

             if(in_array($this->host."_controller.php",$allpages)):


                      $this->includeFile($this->host);
             
             else:


                     include_once '404.php';
                     $this->host="404";
                   

             endif;

    }
   
      public function getHost(){

              
              if($this->host!=""){


                   return $this->host;
              }
              else{


                    return 0;
              }

      }

       #verification de l'existance de differents fichier
       
       public function includeFile($filename){


           //si les fichiers existent on les inclus

             if(

                file_exists("controller".DIRECTORY_SEPARATOR.$filename."_controller.php")

                and

                file_exists("view".DIRECTORY_SEPARATOR.$filename."_view.php")

                and

                file_exists("model".DIRECTORY_SEPARATOR.$filename."_model.php")

              ):
                        include_once 'controller'.DIRECTORY_SEPARATOR.$filename."_controller.php";
                        include_once 'view'.DIRECTORY_SEPARATOR.$filename."_view.php";
                         
                         include_once 'model'.DIRECTORY_SEPARATOR.$filename."_model.php";


            endif;
          


       }

      
       /*****************************************************************************/

	       public function secure($string){


	       	   return (strlen($string)!=0 and $string!="")?trim(htmlentities($string)):"la chaine est vide";

	       }

   }