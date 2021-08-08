<?php
//include ("../Funciones1.php");
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Funciones1.php");

// require("/home4/globexco/public_html/Pagina_AdobeXD/Conexion.php");

class Datos_login extends Funciones {
    
    protected $Usuario;
    protected $Clave;
    protected $Valido;
    
     public function getUsuario1()
    {
        return $this->Usuario;
    }
    
    function __construct($elusuario,$laclave)
    {
       $this->Usuario = $elusuario;
       $this->Clave = $laclave;
    }
    
     public function getValido()
    {
        return $this->Valido;
    }
    
    function displayToastMessage($message,$type){  
          if($type=="error"){
            echo "<script>M.toast({html: '".$message."',classes:'red darken-4'});</script>";
          }else{
            echo "<script>M.toast({html: '".$message."',classes:'green darken-3'});</script>";
          }

        }
    
    function autenticidad()
    {
        $fou = new Funciones;
        try{
            
                $fuu = new Funciones; //primero instanciamos para que guarde en memoria los datos del constructor
                $fuu->mostrar_usuario($this->Usuario,$this->Clave);
              //$isPasswordCorrect = password_verify($password, $existingHashFromDb);  
             $isPasswordCorrect = password_verify($this->Clave, $fuu->getClave());   
                
            if($fuu->getUsuario()==$this->Usuario && $isPasswordCorrect==true){ //convierto la clave que ingreso el usuario en formato sha1- mas adelante la mejoro a MD5
           // echo 'el usuario es correcto papuuuu';
           
           
            $this->Valido=true;
            $accion=" INGRESO AL SISTEMA ";
            $origen=$_SERVER['REMOTE_ADDR'];
            $fou->generaLogs($this->Usuario,$accion,$origen);
           // print '<script>window.location="https://www.globex2021.com/Pagina_AdobeXD/Acceso_sistema/index.php";</script>';
           require("/home4/globexco/public_html/Pagina_AdobeXD/Correo/confirmar_autenticacion.php");
           $correo = new enviar_correo;
           $correo->actualice_codigo_BD($this->Usuario);
           $correo->envielo($this->Usuario,$correo->buscar_codigo_BD($this->Usuario),$correo->getEmail()); //NOTA, PHP ES EXIGENTE CON LAS VARIABLES, AL PARECER CUANDO LAS LLAMO PUEDO HACER USO UNA VEZ SUPUESTAMENTE
           
           //buscamos despues el codigo de verificacion que tiene en la base de datos, no lo comprobamos, eso ya lo hicimos, solo necesito saber cual es el numero
        
           //PARA QUE EL ME VALIDE EL USUARIO DEL CORREO ELECTRONICO TOCA PASARLE UNA VARIABLE POR URL POR GET
           print "<script>window.location.href='https://www.globex2021.com/Pagina_AdobeXD/Autenticacion/Pagina_validacion_correo/Verificacion_correo.php?username=$this->Usuario'</script>";
            }else { 
            //echo 'es incorrecto nerro'; 
            }
                
                if($fuu->getUsuario()!=$this->Usuario || $this->Clave!=$fuu->getClave()){ //convierto la clave que ingreso el usuario en formato sha1- mas adelante la mejoro a MD5
                
              //  echo ' el usuario o clave son incorrectos, verifiqueeeee ';
                echo '<div id="error_">'.'El usuario o clave son invalidos, intente nuevamente'.'</div>';
                $this->Valido=false;
                $accion=" USUARIO INGRESO MAL LA CONTRASEÑA O USUARIO ";
                $origen=$_SERVER['REMOTE_ADDR'];
                $fou->generaLogs($this->Usuario,$accion,$origen);
         
          // No puedes utilizar header si ya has mandado datos previamente. Ya que si lo has hecho ya has especificado el encabezado HTTP.
      
       }
            
        }catch(Exception $e){
             $fou->generaLogs($this->Usuario,$accion,$e);
        }
     
       
      
    }
    
}






?>