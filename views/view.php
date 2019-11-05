<?php
class view
{
    protected $basehref;
    protected $nombreUsuario;
    protected $smarty;
	
    public function __construct()
	{
        session_start();
        if (isset($_SESSION['usuario'])) {$this->nombreUsuario = $_SESSION['usuario'];}
    
        $this->smarty = new Smarty();
        $this->basehref = '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/';
        $this->smarty->assign("basehref", $this->basehref);
        $this->smarty->assign("nombreUsuario", $this->nombreUsuario);
    }
} 