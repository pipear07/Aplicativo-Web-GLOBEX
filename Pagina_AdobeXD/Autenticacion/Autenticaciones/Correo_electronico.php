<?php
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
//require("/home4/globexco/public_html/Pagina_AdobeXD/Registro/Enviar_Datos.php"); 
// require_once("/home4/globexco/public_html/Pagina_AdobeXD/Conexion.php");
 // require_once("/home4/globexco/public_html/Pagina_AdobeXD/Diseno_Login/Captchav2.php");
  require_once("/home4/globexco/public_html/Pagina_AdobeXD/Diseno_Login/Canal_datos.php");

class Verificaciones extends canal_datos2 {
    protected $correo;
    protected $codigo_aute;
    
    
    public function getCorreo()
    {
        return $this->correo;
    }
    
    public function getCodigo_autenticacion()
    {
        return $this->codigo_aute;
    }
    
     function __construct()
    {
  
    }
    
    function seleccionar_correo_codigo($usuario){
        


         try{
         
          $con1 = new Conexion; //primero instanciamos para que guarde en memoria los datos del constructor
                 
                 $query = "SELECT `codigo_autenticacion`, Personas.correo FROM `Usuarios` INNER JOIN Personas ON Usuarios.Personas_id_persona = Personas.id_persona WHERE Usuarios.nombre_usuario='$usuario'"; //creamos el query tal cual esta en phpmyadmin
    

            	 $sql = mysqli_query($con1->conectese(),$query); //creamos la variable sql y por medio del mysqli_query, mandamos la conexion y el query
	        	 
	        	 
	        	  
	        	 
	        	  if(mysqli_num_rows($sql)==0){
            	 //    die("No hay registros para mostrar"); //validamos si trajo algun registro
            	// print('<script>alert("no hay registro, no existe");</script>');
            	 }else
            	 {
            	     
                	 while($row = mysqli_fetch_array($sql)) //con el ciclo while, recorremos la fila por arreglo, es decir, por columnas
                	 {
            			$rere = $row[correo];
            			$rere2 = $row[codigo_autenticacion];
            			$this->correo = $rere;
            			$this->codigo_aute = $rere2;
            		 }
            		 
     
    
            		 $con1->desconectese();
            		 
                    // return $ex_usuario;  
            	     
            	 }
         
            
        }catch(PDOException $e1)
        {
            print('<script>alert("algo paso en buscar usuario");</script>');
            $con1->desconectese();
        }
    }
    
}



?>