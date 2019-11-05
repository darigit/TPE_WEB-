<?php
	require_once "libs/Smarty.class.php";

  $template = new Smarty();
  $template->display('templates/login.tpl');
?>