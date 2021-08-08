<?php 
//require_once ('/home4/globexco/public_html/Pagina_AdobeXD/Autenticacion/Pagina_validacion_correo/csrf-magic-1.0.4/csrf-magic.php');
class Conexion extends mysqli{

protected $direccion_ip_Servidor;
protected $nombreUsuario;
protected $password_Base_de_datos;
protected $nombre_Base_de_datos;

public $conn;

    function __construct(){
    
    $this->direccion_ip_Servidor = "162.241.203.120";
    $this->nombreUsuario = "globexco_afelipearevalo";
    $this->password_Base_de_datos = "bHZUIe!v4T8U";
    $this->nombre_Base_de_datos = "globexco_PaginaWeb";
    $this->conn=null;
    }

/*
function imprime_las_propiedades() {
        echo $this->nombreUsuario;
        echo "n";
       
    }
    */
//-------------------------------------------------------------------------------------------------------

    function conectese(){
        try{
                 
                $this->conn = new mysqli($this->direccion_ip_Servidor,$this->nombreUsuario,
                $this->password_Base_de_datos,$this->nombre_Base_de_datos);
       
                if ($this->conn ->connect_error){
                    echo '<script language="javascript">alert("Fallo la conexion");</script>';
                    die("Conexion fallida: " . $this->conn->connect_error);
                }
              
    //            echo 'se logro conexion';  
                return $this->conn;
        
              
            }catch(ErrorException $e){
                
                return print 'error de coexion'+$e;
            }
    
    
    }

    function desconectese(){
         try{
             
             mysqli_close($this->conn);
    //         echo 'desconectado';
             $desconecta = true;
             
            }catch(Exception $error1)
            {
                echo 'ubo un error al desconectar';
                $desconecta = false;
            }
            return $desconecta;
    }
}
?> 






