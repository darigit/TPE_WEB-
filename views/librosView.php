<?php

  require_once "libs/Smarty.class.php";

 class librosView {

   private $basehref;

   public function __construct()
   {
           $this->basehref = '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/';

		}

	public function menu_principal()
	{
		$smarty = new Smarty();
		$smarty->display("header.tpl");
		$smarty->display("menu.tpl");
		$smarty->display("footer.tpl");
	}
  
	function mostrar_Error()
    {
      // error
      
	}
	
    function mostrarLibros($libros)
    {
      // Creamos una instancia de la clase smarty
      $smarty = new Smarty();
      $smarty->assign('libros',$libros);
	  $smarty->assign('basehref', $this->basehref);
      // Renderizamos el archivo
      $smarty->display('templates/mostrar_libros.tpl');
    }

	 public function mostrarlibrosUsuario($libros)
	 {
		  // Creamos una instancia de la clase smarty
      $smarty = new Smarty();
      $smarty->assign('libros',$libros);
	  $smarty->assign('basehref', $this->basehref);
      // Renderizamos el archivo
      $smarty->display('templates/mostrar_libros_usuario.tpl'); 
	 }

      public function mostrar_un_Libro($libro)
      {
        $smarty = new Smarty();
        $smarty->assign('libro',$libro);
		$smarty->assign('basehref', $this->basehref);
        $smarty->display('templates/libro.tpl');
     }
	 
	 public function cargar_un_libro($editoriales)
	 {
		 $smarty = new Smarty();
		 $smarty->assign('editorial',$editoriales);
		 $smarty->assign('basehref', $this->basehref);
		 $smarty->display('templates/altas_libros.tpl');
	 }
	 
	 function crear_el_libro($libro,$editoriales,$idEdit)
	 {
		 $smarty = new Smarty();
		 $smarty->assign('libro',$libro);
		 $smarty->assign('editorial',$editoriales);
		 $smarty->assign('la_editorial',$idEdit);
		 $smarty->display('templates/crearIDlibro.tpl');
	 }
}
