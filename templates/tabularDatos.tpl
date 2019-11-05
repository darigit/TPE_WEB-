{include file="header.tpl"}

<!--     Abrimos la etiqueta tabla una sola vez-->
	 $codigo.= '<table border="1" cellpadding="3">';
	 
<!--	 vamos acumulando de una fila 'tr' por vuelta -->
	
        $codigo.='<tr>';
	 
<!--	 vamos acumulando tantos 'td' como sea necesario -->
	 
			$codigo.='<td>'.{$libro->id_libro}'.</td>';
			$codigo.='<td>'.{$libro->id_editorial}'.</td>';
			$codigo.='<td>'.{$libro->nombre}'.</td>';
			$codigo.='<td>'.{$libro->num_pagina}'.</td>';
			$codigo.='<td>'.{$libro->ISBN}'.</td>';
			$codigo.='<td>'.{$libro->autor}'.</td>';
			$codigo.='<td>'.{$libro->tema}'.</td>';
			'</tr>'
	 
		 $codigo.'</table>';
	 <td><a href="verunlibro/{$libro->id_libro}"><button>Ver</button></a></td>
   </tbody>
{include file="footer.tpl"}