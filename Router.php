<?php
require_once 'controllers/editorialController.php';
require_once 'controllers/librosController.php';
require_once 'controllers/loginController.php';
require_once 'views/librosView.php';
require_once 'views/inicio.php';

// constantes
	
define('ACTION',0);
define('VALOR1',1);
define('VALOR2',2);
define('VALOR3',3);

// si no indica "action" forzamos asi a entrar al default
if (!isset($_GET['action']))
    $_GET['action'] = '';

// parsea (separa) la url (si viene "sumar/5/8" => [sumar, 5, 8])
$action = $_GET['action'];
$partesURL = explode("/", $action);

// decide que acción tomar en base a la url
switch ($partesURL[ACTION])
{
	 case 'inicio': 
        $controller=new LoginController();
        $controller->mostrar_Login();        
    	break;
       
    case "verlibros" :  //  Me trae todos los libros de la base de datos
		$controller = new librosController(); 
		$controller->mostrarLibros();
        break;
		
    case "verunlibro" :  // Me trae un solo libro de la base de datos
		$controller = new librosController();
		$controller->mostrar_un_Libro($partesURL[VALOR1]); 
        break;
		
	case "eliminarlibro":  // Borro un libro de la base de Datos
		$controller = new librosController();
		$controller->eliminar_un_libro($partesURL[VALOR1]); 
		break;
		
	case "cargarlibro": // Realizo la carga por formulario de un libro
		$controller = new librosController();
		$controller->cargar_un_libro();
		break;
		
	case "grabarlibro": // Insertamos un nuevo libro a la Base de Datos
		$controller = new librosController();
		$controller->agregar_un_libro();
		break;
		
	case "actualizarlibro":
		 $controller = new librosController();
		 $controller->crear_libro($partesURL[VALOR1]);
		break;
		
	case "editarlibro":
		$controller = new librosController();
		$controller->editar_un_libro($partesURL[VALOR1]);
		break;
		
	case "ver_editoriales":
		$controller = new EditorialController();
		$controller->verEditoriales();
		break;
		
	case "add_editorial":
		$controller = new EditorialController();
		$controller->cargar_una_editorial();
		break;
		
	case "grabar_editorial":
		$controller = new EditorialController();
		$controller->add_editorial();
		break;	
		
	case "login": 
		$controller = new loginController();
		$controller->mostrar_login();
		break;	
		
	case "verify": 
		$controller = new loginController();
		$controller->verify();
		break;	
		
	case 'eliminar_editorial':
        $controller = new loginController();
        $controller->verificarLogin();
    	break;
		
    case 'logout' :
        $controller = new loginController();
        $controller->CloseSession();
    	break;
		
     default :
		$controller = new librosController(); 
		$controller->mostrar_libros_usuario();
        break;
}
