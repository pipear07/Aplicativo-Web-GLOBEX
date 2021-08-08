<?php 
require("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
//include ("../Conexion.php");
 
 require("/home4/globexco/public_html/Pagina_AdobeXD/Conexion.php");
class Funciones extends Conexion{
    protected $Usuario_data;
    protected $Clave_data;
    
    function __construct()
    {

    }
    
    
    public function getUsuario()
    {
        return $this->Usuario_data;
    }
    
    public function getClave()
    {
        return $this->Clave_data;
    }
    
    
    function generaLogs($usuario,$accion,$origen){
            //Definimos la hora de la accion
            $hora=str_pad(date("H:i:s"),10," "); //hhmmss;
            //Definimos el contenido de cada registro de accion por usuario.
            $usuario=strtoupper(str_pad($usuario,15," "));
            $accion=strtoupper(str_pad($accion,50," "));
            $cadena=$hora.$usuario.$accion.$origen;
            //Creamos dinamicamente el nombre del archivo por dia
            $pre="log";
            $date=date("ymd"); //aammddhhmmss
            $fileName=$pre.$date;
           // echo "$fileName";
            $f = fopen("logs/$fileName.TXT","a"); //EL PROBLEMA ERA LA CARPETA
            fputs($f,$cadena."\r\n") or die("no se pudo crear o insertar el fichero");
            fclose($f);
   
}//end generaLogs function
    
    
     function mostrar(){
         try{
                 $foo = new Conexion; //primero instanciamos para que guarde en memoria los datos del constructor
                 
                 $query = "SELECT id_persona, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, celular, correo FROM Personas WHERE 1"; //creamos el query tal cual esta en phpmyadmin

            	 $sql = mysqli_query($foo->conectese(),$query); //creamos la variable sql y por medio del mysqli_query, mandamos la conexion y el query
            	 if(mysqli_num_rows($sql)==0) die("No hay registros para mostrar"); //validamos si trajo algun registro
            	 while($row = mysqli_fetch_array($sql)) //con el ciclo while, recorremos la fila por arreglo, es decir, por columnas
            	 {
        //			echo ' esto funciona';
        			$name = $row[correo]; 
        			echo "Nombre: ".$name."br/>";
        		 }
        		 
        		 $foo->desconectese();
        		 
                      	
                  
            }catch(Exception $error3)
            {
             echo 'ocurrio un problema en la funcion'.$error3;
            }
     
    }
    
    
    function mostrar_usuario($usuario,$clave){
         try{
                 $foo2 = new Conexion; //primero instanciamos para que guarde en memoria los datos del constructor
                 
                 $query = "SELECT id_usuario, nombre_usuario, clave, activo, Personas_id_persona, Tipos_de_Usuarios_id_tipo_usuario FROM Usuarios WHERE nombre_usuario = '$usuario'"; //creamos el query tal cual esta en phpmyadmin
    

            	 $sql = mysqli_query($foo2->conectese(),$query); //creamos la variable sql y por medio del mysqli_query, mandamos la conexion y el query
            	 if(mysqli_num_rows($sql)==0){
            	 //    die("No hay registros para mostrar"); //validamos si trajo algun registro
            	     $this->Usuario_data = $usuario;
            		 $this->Clave_data = $clave;
            		 $foo2->desconectese();
            	 }else
            	 {
            	     
                	 while($row = mysqli_fetch_array($sql)) //con el ciclo while, recorremos la fila por arreglo, es decir, por columnas
                	 {
            			$ex_usuario = $row[nombre_usuario];
            			$ex_clave = $row[clave];
            			$this->Usuario_data = $ex_usuario;
            			$this->Clave_data = $ex_clave;
           	//		echo "Usuario ooo: ".$ex_usuario."br/>";
           	//		echo "Clave: ".$ex_clave."br/>";
            		 }
    
            		 $foo2->desconectese();
            		 
                    // return $ex_usuario;  
            	     
            	 }
            	   	
                  
            }catch(mysqli_sql_exception $error5)
            {
                 echo 'ocurrio un problema en la funcion'+$error5;
                 $foo2->desconectese();
                 return $error5;
            }
     
    }
    
    
 
    
    
}


    
   // $foo->desconectese();
//   $comenzar = new Funciones;
  // $comenzar2 = new Funciones;
 //   $comenzar->mostrar();
  //  $pera='pipear07';
  //  $comenzar2->mostrar_usuario($pera);





?>