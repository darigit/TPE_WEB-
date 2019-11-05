 <?php

require_once 'controllers/controller.php';
require_once 'controllers/librosController.php';

class loginController extends Controller {

    public function __construct() {
        parent::__construct();        
    }

    public function mostrar_login() {
        $this->loginView->mostrar_formulario_Login();
    }

    public function verify() 
	{
        $username = $_POST['username'];
        $password = $_POST['password'];
		
        if(!empty($username) && !empty($password))
		{
			
            $user = $this->loginUserModel->getUser($username); // Realizo la consulta de usuario en la Base de Datos
            if((!empty($user)) && password_verify($password, $user['password']))
			{
                session_start();
                $_SESSION['USERNAME'] = $username;
                $_SESSION['ID'] = $user["id_usuario"];
                $_SESSION['LAST_ACTIVITY'] = time();
                 header("Location: ".verlibros);
                die();
            }
			else
			{
				$this->loginView->mostrar_formulario_Login("ERROR DE CONTRASEÑA");
			}
		}
		#else
		# { 
		#	$this->loginView->mostrar_mensaje_usuario("INGRESO COMO USUARIO COMUN");
		# }

    }

    public function CloseSession() 
	{
        session_unset();
        session_destroy();
        header('Location: '.LOGIN);
        die(); // buena practica hacer logout
    }
}



?>