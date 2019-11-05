{include file="header.tpl"}
 <table>
   <tbody>
       {foreach from=$libros item=libro}
       <tr>
         <td>{$libro->id_libro}</td>
         <td>{$libro->nombre_editorial}</td>
         <td>{$libro->nombre}</td>
         <td>{$libro->num_pagina}</td>
         <td>{$libro->ISBN}</td>
         <td>{$libro->autor}</td>
         <td>{$libro->tema}</td>
         <td><a href="verunlibro/{$libro->id_libro}"><button>Ver</button></a></td>
         <td><a href="eliminarlibro/{$libro->id_libro}"><button>Eliminar</button></a></td>
         <td><a href="actualizarlibro/{$libro->id_libro}"><button>Actualizar</button></a></td>
       </tr>
     {/foreach}
   </tbody>
 </table>
<a href="cargarlibro"><button>Agregar</button></a>
<a href="logout"><button>Cerrar Session</button></a>

{include file="footer.tpl"}
