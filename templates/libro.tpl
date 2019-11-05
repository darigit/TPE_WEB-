{include file="header.tpl"}
	  <div class="container my-5">
	    	<h2>Formulario con FetchAPI</h2>
		   	<tr>
					<td><div class="col-md-3 col-md-offset-3 alert alert-danger" role="alert">Id Libro : {$libro->id_libro}</div> </td>
					<td><div class="col-md-5 col-md-offset-3 alert alert-danger" role="alert">Id Editorial : {$libro->id_editorial}</div> </td>
					<td><div class="col-md-150 col-md-offset-3 alert alert-danger" role="alert">Nombre : {$libro->nombre}</div> </td>
					<td><div class="col-md-10 col-md-offset-3 alert alert-danger" role="alert">Nro Paginas : {$libro->num_pagina}</div> </td> 
					<td><div class="col-md-15 col-md-offset-3 alert alert-danger" role="alert">ISBN : {$libro->ISBN}</div> </td>
					<td><div class="col-md-100 col-md-offset-3 alert alert-danger" role="alert">Author : {$libro->autor}</div> </td>
					<td><div class="col-md-100 col-md-offset-3 alert alert-danger" role="alert">Tema : {$libro->tema}</div> </td>
					<button id="btnComentario" name="{$libro->id_libro}" class="btn btn-primary" type="">Comentario</button>
				</tr>
				<div id="los_comentarios">
				</div>
	  </div>
		<script src="../js/handlebars-v4.0.12.js"></script>
		<script src="../js/main.js"></script>
{include file = 'footer.tpl'}
