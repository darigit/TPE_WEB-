{include file="header.tpl"}
 <table>
   <tbody>
       {foreach from=$editoriales item=editorial}
       <tr>
         <td>{$editorial->id_editorial}   </td>   
         <td>{$editorial->nombre}</td>
         <td><a href="ver_editoriales/{$editorial->id_editorial}"><button>ver</button></a></td>
         <td><a href="edit_editorial/{$editorial->id_editorial}"><button>editar</button></a></td>
       </tr>
     {/foreach}
   </tbody>
 </table>
<a href="add_editorial"><button>Agregar -- EDITORIAL -- </button></a>
{include file="footer.tpl"}