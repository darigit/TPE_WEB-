<?php
	
	require_once "model.php";
 

   class EditorialModel extends Model
   {
	   
	   function getEditoriales()
	   {
		 $consulta = $this->db_connection->prepare( "select * from editorial");
		 $consulta->execute();
		 return $consulta->fetchAll(PDO::FETCH_OBJ);
	   } 
	   
	   function one_get_editorial($id)
	   {
		   $laEditorial = $this->db_connection->prepare("select * FROM editorial WHERE editorial.id_editorial=?");
		   $laEditorial->execute(array($id));
		   return $laEditorial->fetch(PDO::FETCH_OBJ);
	   }
	   
	   public function grabar_una_editorial($id,$nombre)
	   {
		   $consulta = $this->db_connection->prepare("INSERT INTO editorial (id_editorial,nombre) VALUES (?,?)");
			// Ejecuto la consulta
			$consulta->execute(array($id,$nombre));
	   }
	   
   }

  