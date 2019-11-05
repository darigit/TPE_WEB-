<?php

require_once "apiController.php";
require_once 'models/comentarioModel.php';

class comentarioApiController extends ApiController {

    public function __construct() {
        parent::__construct();
        $this->model = new comentarioModel();
    }

    public function getComentarios($params = []) {
        if (empty($params)) {
         $comentario = $this->model->getAll();
         $this->view->response($comentario, 200);
        }
        else {
            $comentario_id = $params[':ID'];
            $comentario = $this->model->get_libro_comentario($comentario_id);
             if ($comentario)
                $this->view->response($comentario, 200);
            else // si no existe el comentario
                $this->view->response("Comentario id=$comentario_id no se encontró", 404);
        }

    }

    public function insertComentario($params = []) {
        $body = $this->getdata();
        $descripcion = $body->descripcion;
        $puntaje = $body->puntaje;
        $fk_libro = $body->fk_libro;
        $nombre_post = $body->nombre_post;
        
        //inserta comentario y la busca
        $comentario_id = $this->model->insert($descripcion,$puntaje,$fk_libro,$nombre_post);
        $comentario = $this->model->get($comentario_id);

        if ($comentario)
            $this->view->response($comentario, 200);
        else
            $this->view->response("Error al guardar", 500);
    }  
}