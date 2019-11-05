{include file="header.tpl"}
    <div class="col">
        <div class="card text-white bg-dark mb-3" style="max-width: 100rem;">
            <div class="card-header">Ingresar los nuevos datos del LIBRO</div>
            <form class="bg-danger p-3 w-100" method="POST" action="editarlibro/{$libro->id_libro}">
              
               
               
                <div class="form-group row">
                   <div class="col-10">
                        <label class="col-6 col-form-label">Editorial Actual: {$libro->id_editorial} {$la_editorial->nombre}</label>
                    </div>
                </div> 
                  	
                  	 <div class="form-group row">
						<div class="col-10">
							 <label >Seleccionar nueva Editorial</label>
						</div>
               		 </div> 
                  	
                   	<div class="form-group row">
							<select  name="fk_editorial" id="listado">
 								{foreach from=$editorial item=edit}
									<option value="{$edit->id_editorial}">{$edit->nombre} - {$edit->id_editorial}</option>
								{/foreach}
							</select>
                	</div>
                   
        
                
                <div class="form-group row">
                    <label class="col-2 col-form-label">nombre:</label>
                    <div class="col-10">
                        <input class="input ListaCatalogo form-control" type="text" name="nombre" value="{$libro->nombre}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Nro de paginas:</label>
                    <div class="col-10">
                        <input class="input ListaCatalogo form-control" type="number" name="paginas" value="{$libro->num_pagina}" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-2 col-form-label">ISBN:</label>
                    <div class="col-10">
                        <input class="input ListaCatalogo form-control" type="text" name="isbn" value="{$libro->ISBN}" />
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label class="col-2 col-form-label">Autor:</label>
                    <div class="col-10">
                        <input class="input ListaCatalogo form-control" type="text" name="autor" value="{$libro->autor}" />
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label class="col-2 col-form-label">Tema:</label>
                    <div class="col-10">
                        <input class="input ListaCatalogo form-control" type="text" name="tema" value="{$libro->tema}" />
                    </div>
                </div>
					<div>
						<button class="btn btn-success" id="enviarCatalogo" type="submit">Actualizar Libro</button>   
					</div>
                
            </form>
        </div>
    </div>
{include file="footer.tpl"}