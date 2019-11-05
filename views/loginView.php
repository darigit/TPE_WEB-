<?php
require_once "views/view.php";

class loginView extends view {
	
    function mostrar_formulario_Login($error = "") {
        $this->smarty->assign("error", $error);
        $this->smarty->display("templates/login.tpl");
    }
	
	function mostrar_mensaje_usuario($msj = "")
	{
		$this->smarty->assign("mensaje", $msj);
		$this->smarty->display("templates/registrar_usuario.tpl");
	}
}
?>