<?php
	$nombre_completo=$_POST["nombre_completo"];
	$usuario=$_POST["usuario"];
	$password=$_POST["password"];
	$re_password=$_POST["re_password"];
	if ($password!=$re_password)
	{
		$alerta="<div class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-exclamation-sign></span>El password no coincide</div>";
		$smarty->assign("alerta",$alerta);
	}
	$smarty->display("templates/registrar_usuario.tpl");