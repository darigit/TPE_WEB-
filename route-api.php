<?php

require_once 'Routerr.php';
require_once 'api/controller/comentarioApiController.php';

$r = new Router();
// rutas de la api
$r->addRoute('comentario','GET','comentarioApiController','getComentarios');
$r->addRoute('comentario/:ID','GET','comentarioApiController','getComentarios');
$r->addRoute('comentario','POST','comentarioApiController','insertComentario');

//run
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
