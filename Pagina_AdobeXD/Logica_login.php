<?php
 //require("/home4/globexco/public_html/Pagina_AdobeXD/Logica_login.php");
 require_once("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
 require_once("/home4/globexco/public_html/Pagina_AdobeXD/Atrapar_datos.php"); //EL PROBLEMA ERA ESTE, hosting

 class Datos_Capturados extends Datos_login{
     
     protected $Usuario_cap;
     protected $Clave_cap;
     public $Mensaje;
     
     public function getMensaje()
    {
       return $this->Mensaje;
    }
    
     
      function __construct($usuario_login,$clave_login)
     { //DESINFECTAMOS LAS VARIABLES EN EL CONSTRUCTOR para evitar ataques XSS
      $usuario_login = trim($usuario_login); //Elimina los caracteres innecesarios (espacio adicional, tabulación, nueva línea)
      $usuario_login = stripslashes($usuario_login); //Elimina las barras invertidas (\) de los datos de entrada
      $usuario_login = htmlspecialchars($usuario_login);
      $this->Usuario_cap = $usuario_login;
      
      $clave_login = trim($clave_login); //Elimina los caracteres innecesarios (espacio adicional, tabulacibulacion, nueva línea)
      $clave_login = stripslashes($clave_login);//Elimina las barras invertidas (\) de los datos de entrada
      $clave_login = htmlspecialchars($clave_login);
      $this->Clave_cap = $clave_login;
      
     }
     
    
     
     function comenzar_captura(){
            //include ("../Funciones1.php");
                      if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                           $usuario = $this->Usuario_cap;
                           $clave= $this->Clave_cap;
                    
                    if($usuario =="" && $clave=="" || $usuario ==null && $clave==null || $usuario =="undefined" && $clave=="undefined"){
                       // print '<script>alert("Por favor llene los campos*");</script>';
                        $this->Mensaje="Por favor llene los campos";
                        // displayToastMessage('Llene campos','error');
                    }else{
                        
                            if($usuario =="" && $clave!=""){
                               // print '<script>alert("El usuario no puede estar vacio");</script>';
                                 $this->Mensaje="El usuario no puede estar vacio";
                            }else{
                                
                                if($usuario !="" && $clave==""){
                              //  print '<script>alert("La clave no puede estar vacia");</script>';
                                 $this->Mensaje="La clave no puede estar vacia";
                                }else{
                                    
                                      //  $resultado = $_POST['error_usuario']; 
                                      //  echo 'funciona o no'$resultado; //haciendo este echo estas respondiendo la solicitud ajax
                                        $mensaje = null;
                                                        
                                        if (isset($_POST["ajax"]))
                                        {
                                       
                                        
                                        if ($usuario != "")
                                        {
                                            $mensaje = "<script>alert('entro el mensaje');</script>";
                                        }
                                        }
                      
                                         echo $mensaje;
                                        
                                      //VERIFIQUE EN LA BASE DE DATOS
                                         $evento = new Datos_login($usuario,$clave);
                                         $evento->autenticidad();
                                        
                                        // get the q parameter from URL
                                        //$q = $_REQUEST["q"];
                                    
                                }
                                
                            }
                       }
                 }
         
     }
     
     
     
     
     
     
     
     
     
     
       function comenzar_captura2($usuario,$clave){
            //include ("../Funciones1.php");
                      if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                          
                    
                    if($usuario =="" && $clave=="" || $usuario ==null && $clave==null || $usuario =="undefined" && $clave=="undefined"){
                       // print '<script>alert("Por favor llene los campos*");</script>';
                        $this->Mensaje="Por favor llene los campos";
                        // displayToastMessage('Llene campos','error');
                    }else{
                        
                            if($usuario =="" && $clave!=""){
                               // print '<script>alert("El usuario no puede estar vacio");</script>';
                                 $this->Mensaje="El usuario no puede estar vacio";
                            }else{
                                
                                if($usuario !="" && $clave==""){
                              //  print '<script>alert("La clave no puede estar vacia");</script>';
                                 $this->Mensaje="La clave no puede estar vacia";
                                }else{
                                    
                                      //  $resultado = $_POST['error_usuario']; 
                                      //  echo 'funciona o no'$resultado; //haciendo este echo estas respondiendo la solicitud ajax
                                        $mensaje = null;
                                                        
                                        if (isset($_POST["ajax"]))
                                        {
                                       
                                        
                                        if ($usuario != "")
                                        {
                                            $mensaje = "<script>alert('entro el mensaje');</script>";
                                        }
                                        }
                      
                                         echo $mensaje;
                                        
                                      //VERIFIQUE EN LA BASE DE DATOS
                                         $evento = new Datos_login($usuario,$clave);
                                         $evento->autenticidad();
                                        
                                        // get the q parameter from URL
                                        //$q = $_REQUEST["q"];
                                    
                                }
                                
                            }
                       }
                 }
         
     }
     
     
     
     
     
     
     
     
     
     
        function displayToastMessage($message,$type){  
            if($type=="error"){
            echo "<script>M.toast({html: '".$message."',classes:'red darken-4'});</script>";
            }else{
            echo "<script>M.toast({html: '".$message."',classes:'green darken-3'});</script>";
            }
        }
   
        
     
 }  
 
 /*
 //PUDE SOLUCIONAR EL PROBLEMA DEL MENSAJE DE USUARIO ERRONEO, MIENTRAS TANTO EN EL AJAX ESTUBE HACIENDO PRUEBAS, Y PARECE QUE TIENE QUE VER CON LA CLASE EN PHP
 //LOS AJAX HIPOTETICAMENTE NO PUEDEN ENVIAR DATOS DENTRO DE LAS CLASES YA QUE LAS CLASES DE PHP ESTAN PROTEGIDAS - MANUAL PHP VERSION 7 - PAGINA 206
 
  if ($_SERVER['REQUEST_METHOD'] === 'POST')
  {
    // $pruebalo = new Datos_Capturados($_POST["username"],$_POST["password"]);
      
      $dat = new Datos_Capturados($_POST["username"],$_POST["password"]);
      $dat->comenzar_captura();
      
      if($dat->getMensaje()==""){
          //No haga nada
      }else{
          echo '<div id="error_">'.$dat->getMensaje().'</div>';
      }
  
  }
  */
  

 


 

//print "<script>window.setTimeout(function() { window.location = 'https://www.globex2021.com/Pagina_AdobeXD/Diseno_Login/Login.php' }, 1000);</script>";
 // No puedes utilizar header si ya has mandado datos previamente. Ya que si lo has hecho ya has especificado el encabezado HTTP.


?>