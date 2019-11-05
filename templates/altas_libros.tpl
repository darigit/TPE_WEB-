{include file="header.tpl"}
    <form method="POST" action="grabarlibro">
    	<legend>ALTA DE DATOS - LIBROS -</legend>
		 <p><label>NOMBRE DE LA EDITORIAL:</label></P>;		

       <select  name="id_Edit">
            <option value="1">Editoriales</option>
				{foreach from=$editorial item=edit}
					<option value="{$edit->id_editorial}">{$edit->nombre}</option>
				{/foreach}
		</select>
        <p><label>Nombre:<input type="text" name="nombre"></label></P>;
        <P><label>Numero de Paginas:<input name="paginas"></label></P>;
        <P><label>ISBN:<input type="text" name="isbn"></label></P>;
        <P><label>Autor:<input type="text" name="autor"></label></P>;
        <P><label>Tema:<input type="text" name="tema"></label></P>;
        <P><input type="submit"></P>;
    </form>

{include file="footer.tpl"}