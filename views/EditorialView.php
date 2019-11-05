<?php

  require_once "libs/Smarty.class.php";

 class EditorialView {

   private $basehref;

   public function __construct()
   {
           $this->basehref = '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/';
   }
	 
	 function mostrarEditorial($editoriales)
    {
      // Creamos una instancia de la clase smarty
      $smarty = new Smarty();
      $smarty->assign('editoriales',$editoriales);
      // Renderizamos el archivo
      $smarty->display('templates/mostrar_editorial.tpl');
    }
	 
	  public function mostrar_mensaje()
	  {
		 $smarty = new Smarty();
		 $smarty->display('templates/mostrar_mensaje.tpl');
	 }
	 
	 public function cargar_una_editorial()
	 {
		 $smarty = new Smarty();
		 $smarty->display('templates/altas_editorial.tpl');
	 }
	 
	 public function selectEditorial($editorial)
	 {
		 $smarty = new Smarty();
		 $smarty->assign('editoriales',$editorial);
		 $smarty->display('templates/listado_editorial.tpl');
		 
	 }
	 
 }