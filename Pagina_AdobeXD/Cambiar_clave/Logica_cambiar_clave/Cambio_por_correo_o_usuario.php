<?php
//require_once ('/home4/globexco/public_html/Pagina_AdobeXD/Autenticacion/Pagina_validacion_correo/csrf-magic-1.0.4/csrf-magic.php');
 require_once("/home4/globexco/public_html/Pagina_AdobeXD/Conexion.php");

class Cambiando_clave extends Conexion{
    protected $usuario_actual;
    protected $contra_actual;
    protected $validar;
    
     function __construct(){
     
    }
    
    
    function getUsuarioActual(){
      return  $this->usuario_actual;   
    }
    
    function getContraActual(){
      return  $this->contra_actual;   
    }
    
    
    function getValidar2(){
      return  $this->validar;   
    }
    
    function Buscar_datos($usuario_o_correo){
       //  $conn = new Conexion; //primero instanciamos para que guarde en memoria los datos del constructor
      //  $stm = $conn->prepare("SELECT `id_usuario`, `nombre_usuario` `codigo_autenticacion`, `clave`, `activo`, Personas.primer_nombre,Personas.segundo_nombre, Personas.primer_apellido, Personas.segundo_apellido, Personas.celular, Personas.correo, `Tipos_de_Usuarios_id_tipo_usuario` FROM `Usuarios` INNER JOIN Personas ON Usuarios.Personas_id_persona = Personas.id_persona WHERE  Personas.correo LIKE  '%$usuario_o_correo%'");

     try{
                 $foo = new Conexion; //primero instanciamos para que guarde en memoria los datos del constructor
                 
                 $query = "SELECT `id_usuario`, `nombre_usuario`, `codigo_autenticacion`, `clave`, `activo`, Personas.primer_nombre,Personas.segundo_nombre, Personas.primer_apellido, Personas.segundo_apellido, Personas.celular, Personas.correo, `Tipos_de_Usuarios_id_tipo_usuario` FROM `Usuarios` INNER JOIN Personas ON Usuarios.Personas_id_persona = Personas.id_persona WHERE  Personas.correo LIKE  '%$usuario_o_correo%'"; //creamos el query tal cual esta en phpmyadmin

            	 $sql = mysqli_query($foo->conectese(),$query); //creamos la variable sql y por medio del mysqli_query, mandamos la conexion y el query
            	 if(mysqli_num_rows($sql)==0){//validamos si trajo algun registro
            	  print("<script>alert('No Existe en la base de datos');</script>");   
            	 }else{
            	      while($row = mysqli_fetch_array($sql)) //con el ciclo while, recorremos la fila por arreglo, es decir, por columnas
                    {
                    //			echo ' esto funciona';
                    //	$name = $row[correo]; 
                    
                   $rere1 = $row['nombre_usuario'];
                    $rere2 = $row['clave'];
                     $this->usuario_actual = $rere1;
                    $this->contra_actual = $rere2;
                    
                    
                    }
                    
                    $foo->desconectese();
                    $this->validar=true;
            	     
            	 }
            	
                  
            }catch(Exception $error3)
            {
                $this->validar=false;
             echo 'ocurrio un problema en la funcion'.$error3;
             $foo->desconectese();
            }
    
    }
    
    
    
    function Cambie_la_clave($clave_nueva){
        
         try{
                 $foo = new Conexion; //primero instanciamos para que guarde en memoria los datos del constructor
                 
                 $query = "UPDATE `Usuarios` SET `clave`='$clave_nueva' WHERE nombre_usuario = '$this->usuario_actual'"; //creamos el query tal cual esta en phpmyadmin
    //print ("<script>alert('$this->usuario_actual');</script>");
            	 $sql = mysqli_query($foo->conectese(),$query); //creamos la variable sql y por medio del mysqli_query, mandamos la conexion y el query
            	 
                    $foo->desconectese();
                   
            	     
            }catch(Exception $error3)
            {
             print ("<script>alert('Hubo un error al actualizar la contraseña del usuario');</script>");
             $foo->desconectese();
            }
        
    }
    
    
}


?>