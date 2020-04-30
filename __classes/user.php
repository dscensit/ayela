<?php 


 class user{


      private $nom;
      private $mail;
      private $mdp;
      private $allisgood;
       
      public function __construct(){

          
                    
       }



       public function createUser($nom,$mdp,$mail){

             $this->nom=$nom;
             $this->mail=$mail;
             $this->mdp=$mdp;
        
             global $database;

           

             $verification=$database->prepare("SELECT *from users where mail=?");
             $verification->execute(array($this->mail));
             $row=$verification->rowCount();
 
            

                if( $row>0 ){

                     

                     $this->allisgood=false;



                }else{

                        $verify=$database->prepare("SELECT *from users where nom=?");
                        $verify->execute(array($this->nom));
                        $range=$verify->rowCount();

                        if($range>0){


                               $this->allisgood=false;


                        }else{


                             $query=$database->prepare("INSERT INTO  users(nom,mdp,mail) values (?,?,?)");
                             $query->execute(array($this->nom,$this->mdp,$this->mail));
                             $this->allisgood=true;


                        }

                        

                       

                }             

            
       }


       public function Authentification($mail,$mdp){


            $this->mail=$mail;
            $this->mdp=$mdp;

            global $database;

            $verify=$database->prepare("SELECT *from users  where mail=? and mdp=?");
            $verify->execute(array($this->mail,$this->mdp));
            $count=$verify->rowCount();
                    
            

           
            if($count==1):
          
                     $this->allisgood=true;

            else:


                  $this->allisgood=false;

            endif;




       }


       public function returnthebool(){


                return $this->allisgood;

       }



 }