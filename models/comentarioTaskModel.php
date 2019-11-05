<?php 

class comentarioTaskModel  
{
    private $db_connection;
    
    function __construct()
    {
        $this->db_connection = new PDO('mysql:host=localhost;dbname=biblioteca;charset=utf8', 'root', '');
    }
	
    function getComentarioAll()
    {
        $sentencia = $this->db_connection->prepare( "select * from comentario");
        $sentencia->execute();
		return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getComentarioId($id)
    {
        $sentencia = $this->db_connection->prepare( "select * from comentario"
                ." WHERE id = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function saveComentario($puntaje, $desc = "")
    {
        //preparar la sentecia SQL con PDO seguro (los ?)
        $sentencia = $this->db_connection->prepare(
            "INSERT INTO comentario(puntaje,descripcion) VALUES(?,?)");
        //pasar los parametros y ejecutar en la BBDD
        $sentencia->execute(array($puntaje, $desc));

        return $this->db_connection->lastInsertId();
    }

    function deleteComentario($id)
    {
        $sentencia = $this->db_connection->prepare("delete from comentario where id=?");
        $sentencia->execute(array($id));
    }


    function endComentario($id)
    {
        $sentencia = $this->db_connection->prepare( 
        "UPDATE comentario SET finalizada = 1 WHERE id_tarea=?");
        $sentencia->execute(array($id));
    }

}