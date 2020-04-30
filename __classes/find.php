<?php 

/**
 * 
 */



class Find 
{
	private $nom;
	private $prenom;
	private $id_document;
	private $image;
	private $telephone;
	private $commune;
	private $lieu;
	private $what;
	function __construct()
	{

		

		
	}

	/************************************************************************************************************/


	public function  createPublication($nom,$prenom,$id_document,$image,$type,$telephone,$what,$commune,$lieu){




			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->id_document=$id_document;
			$this->image=$image;
			$this->telephone=$telephone;
			$this->commune=$commune;
			$this->lieu=$lieu;
			$this->what=$what;
			$this->type=$type;
			
         

           global $database;


           $myquery=$database->prepare("SELECT *from declarations where numero_document=?");
           $myquery->execute(array($this->id_document));
           $count=$myquery->rowCount();

		   if($count==0):
			

			 $queryString=$database->prepare("INSERT INTO declarations(nom,prenom,numero_document,type_document,photo,telephone,what,commune,lieu) values (?,?,?,?,?,?,?,?,?)");
			 if($queryString->execute(array($this->nom,$this->prenom,$this->id_document,$this->type,$this->image,$this->telephone,$this->what,$this->commune,$this->lieu)) ):
				

				return ["message"=>"enregistrement effectué Merci de nous faire confiance"];

			
			 else:


				return ["message"=>"une demande relative à cette carte est deja en cours"];



			 endif;




         

 
           else:


             

               
			 return ["message"=>"une demande relative à cette carte est deja en cours"];

                 
           
           endif;



            





	}


	public function  createfind($nom,$prenom,$id_document,$image,$type,$telephone,$what,$commune,$lieu){




		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->id_document=$id_document;
		$this->image=$image;
		$this->telephone=$telephone;
		$this->commune=$commune;
		$this->lieu=$lieu;
		$this->what=$what;
		$this->type=$type;
		
	 

	   global $database;


	   $myquery=$database->prepare("SELECT *from retrouve where numero_document=?");
	   $myquery->execute(array($this->id_document));
	   $count=$myquery->rowCount();

	   if($count==0):
		

		 $queryString=$database->prepare("INSERT INTO retrouve(nom,prenom,numero_document,type_document,photo,telephone,what,commune,lieu) values (?,?,?,?,?,?,?,?,?)");
		 if($queryString->execute(array($this->nom,$this->prenom,$this->id_document,$this->type,$this->image,$this->telephone,$this->what,$this->commune,$this->lieu)) ):
			

			if($this->sendMail($nom,$prenom,$id_document,$lieu,$type)):


				return ["message"=>"enregistrement effectué votre annonce est prise en compte"];

			else:

				return ["message"=>"enregistrement effectué  merci pour votre confiance"];

			endif;
			

		
		 else:


			return ["message"=>"une demande relative à cette carte est deja en cours"];



		 endif;




	 


	   else:


		 

		   
		 return ["message"=>"une demande relative à cette carte est deja en cours"];

			 
	   
	   endif;



		





}

	/*-------------------------------------------------------------------------------------------------------*/


	public function getAll(){

	
		 global $database;

		 $myquery=$database->query("SELECT *from declarations ");
		 $count=$myquery->rowCount();
		 $data=[];
		 while($result=$myquery->fetchAll(PDO::FETCH_OBJ)):
			
			  $data=["count"=>$count,"data"=>$result];

		 endwhile;

		 return $data;



	}



	public function getAnnonce($id){

        global $database;
		$myquery=$database->prepare("SELECT *from declarations where numero_document=? ");
		$myquery->execute(array($id));
		$data=$myquery->fetch(PDO::FETCH_OBJ);



		return $data;




	}


	public function removeOne($id){

	


	}



	public  function getErrorMessage($message){


   
      return ($message!="")?ucfirst(htmlentities($message)):" error ";


	}



	public  function sendMail($nom,$prenom,$id_carte,$lieu,$type){


        
		$message = " La carte n°  ".$id_carte."<br />
 
 
		 viens d'etre retrouvée par $nom    $prenom :
         détail relatif à la carte 
		 lieu : $lieu
		 commune : $commune 
		 date: $date
		 type de carte:$type <br>



		

	
		
 
   ";
	 $headers =  "From: \"ayela \"<admin@ayela.com>\n"; // Expéditeur
	 $headers .= "Content-type: text/html; charset=\"utf-8\""; // Encodage en HTML et UTF-8
 
	 if( mail("elvirekoua2000@gmail.com", " Carte retrouvée  ", $message, $headers) ):
 
 
 
	 return true;
 
 
	 else:
 
	 return false;
 
	 endif;
 
 
 
	 }
 

  /*-------------------------------------------------------------------------------*/



}
