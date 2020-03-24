<?php 

//cette classe permet de consommer une api
class Http{


  private $url=null;
  private $apikey;
  private $drection;

 
 //on recupere url et la clé de l'api

  public function __construct($direction){


        

         $this->direction=$direction;

         // on initialise curl 
        
         

         $this->url=curl_init($direction);


       


  }


  public function httpGet(){

 

         if($this->url!=null):

                
                    curl_setopt($this->url,CURLOPT_RETURNTRANSFER,true);


                    $data=curl_exec($this->url);


                     if($data==false):
                        

                         var_dump(curl_error($this->url));

                    else:

                           $data=json_decode($data,true);

                           return $data;
                           

                    endif;

        else:

             exit();


        endif;



     
      curl_close($this->url);


  }




}