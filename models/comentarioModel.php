<?php
require_once "model.php";

class comentarioModel extends Model
{

    function getAll()
    {
        $sentencia = $this->db_connection->prepare("select * from comentario");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function get($id)
    {
        $sentencia = $this->db_connection->prepare("select * from comentario WHERE id = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function get_libro_comentario($id)
    {
        $sentencia = $this->db_connection->prepare("select * from comentario WHERE fk_libro = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function insert($descripcion, $puntaje, $fk_libro, $nombre_post)
    {
        $sentencia=$this->db_connection->prepare("INSERT INTO comentario(descripcion, puntaje, fk_libro, nombre_post) VALUES (?, ?, ?, ?)");
        $sentencia->execute(array($descripcion, $puntaje, $fk_libro, $nombre_post));
        return $this->db_connection->lastInsertId();
    }

}