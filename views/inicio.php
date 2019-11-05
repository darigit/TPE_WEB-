<?php
	require_once "views/view.php";
    
	class inicio extends view {
        function mostrarInicio() {
            $this->smarty->display("templates/inicio.tpl");
        }
    }