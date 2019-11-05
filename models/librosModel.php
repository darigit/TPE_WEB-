<?php
require_once 'models/class.conexion.php';  

class librosModel extends Conexion
{
	
  	function getlibros()
	 {
		$sentencia=$this->db_connection->prepare("SELECT libro.*, editorial.nombre as nombre_editorial FROM libro, editorial WHERE libro.id_editorial=editorial.id_editorial");
		  //$sentencia = $this->db_connection->prepare( "select * from libro");
		 $sentencia->execute();
		 return $sentencia->fetchAll(PDO::FETCH_OBJ);
	 }

  	function get_un_libro($id_libro)
	  {
		#$consulta = $this->db_connection->prepare("SELECT * FROM libro, editorial WHERE libro.id_editorial=editorial.id_editorial and libro.id_libro=?");
		$consulta = $this->db_connection->prepare("select * FROM libro WHERE libro.id_libro=?");
		$consulta->execute(array($id_libro)); // se ejecuta con un arreglo con los parametros
		return $consulta->fetch(PDO::FETCH_OBJ);
	  }
	
   function eliminar_un_libro($id)
   {	   
	   // Elimino un libro
	   $consulta = $this->db_connection->prepare("DELETE FROM libro WHERE id_libro=?");
	   $consulta->execute(array($id));
	   
   }

	
	function grabar_un_libro($id_edit,$nombre,$paginas,$isbn,$autor,$tema)
		{
			$consulta = $this->db_connection->prepare("INSERT INTO libro (id_editorial,nombre,num_pagina,isbn,autor,tema) VALUES (?,?,?,?,?,?)");
			// Ejecuto la consulta
			$consulta->execute(array($id_edit,$nombre,$paginas,$isbn,$autor,$tema));
		}
	
	function guardar_datos_editados($id,$id_edit,$nombre,$paginas,$isbn,$autor,$tema)	
	{
	$consulta = $this->db_connection->prepare("UPDATE libro SET id_editorial=?,nombre=?,num_pagina=?,isbn=?,autor=?,tema=? WHERE id_libro=?");
	#$consulta->execute(array($id,$id_edit,$nombre,$paginas,$isbn,$autor,$tema));
	$resultado = $consulta->execute([$id_edit,$nombre,$paginas,$isbn,$autor,$tema,$id]);
	}
	
}

 