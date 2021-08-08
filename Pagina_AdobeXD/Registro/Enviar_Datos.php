<?php
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Conexion.php");

class Enviar_Registro extends Conexion{
    
    protected $Id_persona;
    protected $Primer_Nombre;
    protected $Segundo_Nombre;
    protected $Primer_Apellido;
    protected $Segundo_Apellido;
    protected $Correo;
    protected $Celular;
    protected $Usuario_Creado;
    protected $Clave;
    protected $Con_Clave;
    protected $Codigo_autenticar;
    

    public function getPrimerNombre()
    {
        return $this->Primer_Nombre;
    }
    
    public function getSegundoNombre()
    {
        return $this->Segundo_Nombre;
    }
    
    public function getPrimerApellido()
    {
        return $this->Primer_Apellido;
    }
    
    public function getSegundoApellido()
    {
        return $this->Segundo_Apellido;
    }
    
    public function getCorreo_E()
    {
        return $this->Correo;
    }
    
    public function getCelular1()
    {
        return $this->Celular;
    }
    
    public function getUsuario()
    {
        return $this->Usuario_Creado;
    }
    
    public function getClave1()
    {
        return $this->Clave;
    }
    
    public function getConfirm_Clave()
    {
        return $this->Con_Clave;
    }
    
    public function getCodigo_autenticar1()
    {
        return $this->Codigo_autenticar;
    }
    
    //##############################################   CONSTRUCTOR
    function __construct($Primer_Nombre1,$Segundo_Nombre1,$Primer_Apellido1,$Segundo_Apellido1,$Correo1,$Celular1,$Usuario_Creado1,$Clave1,$Con_Clave1)
    {
        $this->Primer_Nombre=$Primer_Nombre1;
        $this->Segundo_Nombre=$Segundo_Nombre1;
        $this->Primer_Apellido=$Primer_Apellido1;
        $this->Segundo_Apellido=$Segundo_Apellido1;
        $this->Correo=$Correo1;
        $this->Celular=$Celular1;
        $this->Usuario_Creado=$Usuario_Creado1;
        $this->Clave=password_hash($Clave1,PASSWORD_BCRYPT); //LAS CLAVES SON CON UN HASH DE CONTRASEÑA CON BCRYPT
        $this->Con_Clave=password_hash($Con_Clave1, PASSWORD_BCRYPT);
       
    }
    
    //-----------------------------------------------  FUNCIONES
    
    function registrarlo()
    {
        try{
              $con = new Conexion; //primero instanciamos para que guarde en memoria los datos del constructor
                 
                 $query = "INSERT INTO `Personas`(`primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `celular`, `correo`) VALUES ('$this->Primer_Nombre','$this->Segundo_Nombre','$this->Primer_Apellido','$this->Segundo_Apellido','$this->Celular','$this->Correo')"; //creamos el query tal cual esta en phpmyadmin
    
            	 $sql = mysqli_query($con->conectese(),$query); //creamos la variable sql y por medio del mysqli_query, mandamos la conexion y el query
	        	 $con->desconectese();
	        	 //agregamos la tabla de los usuarios abriendo otra conexion por seguridad y cerrando la anterior
	        	 
        }catch (PDOException $e)
        {
            print('<script>alert("marika algo paso");</script>');
        }
    }
    
    function Seleccionar_id()
    {
        try{
         
          $con1 = new Conexion; //primero instanciamos para que guarde en memoria los datos del constructor
                 
                 $query = "SELECT `id_persona` FROM `Personas` WHERE primer_nombre ='$this->Primer_Nombre' && correo='$this->Correo'"; //creamos el query tal cual esta en phpmyadmin
    //Toca agregar la consulta de buscar codigo de autenticacion

            	 $sql = mysqli_query($con1->conectese(),$query); //creamos la variable sql y por medio del mysqli_query, mandamos la conexion y el query
	        	 
	        	 
	        	  
	        	 
	        	  if(mysqli_num_rows($sql)==0){
            	 //    die("No hay registros para mostrar"); //validamos si trajo algun registro
            //	 print('<script>alert("no hay registro, no existe");</script>');
            	 }else
            	 {
            	     
                	 while($row = mysqli_fetch_array($sql)) //con el ciclo while, recorremos la fila por arreglo, es decir, por columnas
                	 {
            			$rere = $row[id_persona];
            		//	$rere2 = $row[codigo_autenticacion];
            			$this->Id_persona = $rere;
            		//	$this->Codigo_autenticar = $rere2;
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
    
    function Seleccionar_codigo_verificacion($usuario){
        
        
         try{
         
          $con1 = new Conexion; //primero instanciamos para que guarde en memoria los datos del constructor
                 
                 $query = "SELECT `id_usuario`, `nombre_usuario`, `codigo_autenticacion` FROM `Usuarios` WHERE nombre_usuario='$usuario'"; //creamos el query tal cual esta en phpmyadmin
   

            	 $sql = mysqli_query($con1->conectese(),$query); //creamos la variable sql y por medio del mysqli_query, mandamos la conexion y el query
     	 
	        	  if(mysqli_num_rows($sql)==0){
            	 //    die("No hay registros para mostrar"); //validamos si trajo algun registro
            //	 print('<script>alert("no hay registro, no existe");</script>');
            	 }else
            	 {
            	     
                	 while($row = mysqli_fetch_array($sql)) //con el ciclo while, recorremos la fila por arreglo, es decir, por columnas
                	 {

            		$rere2 = $row[codigo_autenticacion];
            		$this->Codigo_autenticar = $rere2;
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
    
    function insertar_usuario(){
        try{
            
     	  $con2 = new Conexion;
    	// $this->Id_persona es la varianle id, para que inserte el id de la persona, ya que es una llave foranea toca asi
    	 $query2="INSERT INTO `Usuarios`(`nombre_usuario`, `clave`, `Personas_id_persona`) VALUES ('$this->Usuario_Creado','$this->Clave','$this->Id_persona')";
    	 $sql2 = mysqli_query($con2->conectese(),$query2);
    	 $con2->desconectese();
    		 
            // return $ex_usuario;  
            
        }catch(PDOException $e2)
        {
             print('<script>alert("algo paso en insertar usuario");</script>');
             $con2->desconectese();
        }
    }
    
}

?>
