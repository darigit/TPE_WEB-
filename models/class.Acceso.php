>?php
  class Acceso
{
	private $email;
	private $user;
	private $pass;

   public function Login(){

		try{
			if(!empty($_POST['user])and !empty($_POST['pass'])and !empty($_POST['session']))
			}
			else{
				throw new Execption('ERROR: Datos vacios.');
			}
		}catch(Exception $login){
			echi $e->gertMessage(); 
		}
	}


	public function Recuperar(){

	}

	public function Registrar(){

	}
}
?>