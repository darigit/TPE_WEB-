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
       </tr>
     {/foreach}
   </tbody>
 </table>
<a href="login"><button>Registrarse</button></a>
{include file="footer.tpl"}
