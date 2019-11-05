<?php
//ini_set('display_errors', 0);

require_once 'models/datos/datosModel.php';
define('HOST',$db_host);
define('BASE',$db_base);
define('USER',$db_user);
define('PASS',$db_pass);

abstract class Model {
    
    protected $db_connection;

    function __construct()
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
            PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
        ];
        try {
            $this->db_connection = new PDO('mysql:host='.HOST.';dbname='.BASE.';charset=utf8',USER,PASS, $options);
        } 
        catch (PDOException $e) {
          //crear base de datos
          $this->crearDB();      
        } 
        catch (Exception $e) {
          echo "error";
          print "¡Error!: " . $e->getMessage() . "<br/>";
        }
        finally{
          //$this->conectarBaseDeDatos->closeCursor();
          //$this->conectarBaseDeDatos = null;
        }      
    }  

    

    function crearDB(){
      
        //crear la base de datos - conexion a mysql
        $this->conectarBaseDeDatos = new PDO('mysql:host='.HOST.';dbname=mysql;charset=utf8',USER,PASS); 
        $sentencia = $this->conectarBaseDeDatos->prepare("CREATE DATABASE ".BASE." /*!40100 COLLATE 'latin1_swedish_ci' */;");
        $sentencia->execute();
        //conexion a nueva Base
        try {
          $this->conectarBaseDeDatos = new PDO('mysql:host='.HOST.';dbname='.BASE.';charset=utf8',USER,PASS); 
          // no hubo error
          // recorrer archivo sql para generar las tablas y contenidos
          $myfile = fopen("database/db_".BASE.".sql", "r") or die("Error al abrir el archivo!");
          $la_consulta = "";
          while ($line = fgets($myfile)) {
            $posicion = strpos($line,"-- ");
            if($posicion === false){
              $la_consulta .= $line;
              if(strpos($line,";")>0){
                $sentencia = $this->conectarBaseDeDatos->prepare($la_consulta);
                $sentencia->execute();
                $la_consulta = "";    
              }
            }
          }
          
        } 
        catch (PDOException $e) {
          //crear base de datos
          echo "error base nueva";      
        } 
        catch (Exception $e) {
          echo "error";
          print "¡Error!: " . $e->getMessage() . "<br/>";
        }
        finally {
          //$this->conectarBaseDeDatos->closeCursor();
          //$this->conectarBaseDeDatos = null;
        }
       
        fclose($myfile);
      }
}
