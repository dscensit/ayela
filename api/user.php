<?php 
include '../__config/config.php';
include_once '../__config/connection.php';


header('content-type:Application/json');


global $database;


$data=null;


$request=$_SERVER['REQUEST_METHOD'];


switch ($request) {

	 case 'GET' or 'Get' or 'get':

			 if(isset($_GET['id'])):
                  
                  $user=getUser($_GET['id']);
                  echo $user;
                      
			 else:

			 	 $all=getAll();

			 	 echo $all;


			 endif;


		# 
		break;
	
	default:
		# code...
		header("HTTP/1.0 405 Method Not Allowed");

	break;
}

 function getUser($id){


           global $database;

            $nom=trim(htmlentities($id));

            $statement=$database->prepare("SELECT *from  users where id=? limit 1");

            $statement->execute(array($nom));
             
            $row=$statement->rowCount();

            $data=($row>0)?$statement->fetch(PDO::FETCH_OBJ):"nothing to show ";

            return json_encode($data,JSON_PRETTY_PRINT);
 }



 function getAll(){





      global   $database;
     
      $statement=$database->query('SELECT *from users');

      $table=array();
      $result=$statement->rowCount();

    if($result>0):


        while ($row=$statement->fetchAll(PDO::FETCH_OBJ)) {
            
              $table[]=$row;
        }


    endif;

       return json_encode($table,JSON_PRETTY_PRINT);



 }