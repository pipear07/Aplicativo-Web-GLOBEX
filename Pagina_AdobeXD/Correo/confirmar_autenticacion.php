<?php 
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Autenticacion/Autenticaciones/Correo_electronico.php");

//require_once("/home4/globexco/public_html/Pagina_AdobeXD/Correo/phpmailer/phpmailer/src/PHPMailer.php"); 
// use PHPMailer\PHPMailer\PHPMailer;
   


// require_once __DIR__ . '/vendor/autoload.php';
// $mail = new PHPMailer(true);
 
//use PHPMailer\PHPMailer\Exception;
//use phpmailer/phpmailer\src\PHPMailer;
class enviar_correo extends Verificaciones{
    //require_once("/home4/globexco/public_html/Pagina_AdobeXD/Correo/phpmailer/phpmailer/src/PHPMailer.php");     
        


    protected $Email;
    protected $Codigo_autenticar;
    protected $Codigo_generado;
    
    public function getEmail()
    {
        return $this->Email;
    }
    
    public function getCodigo_autenticar1()
    {
        return $this->Codigo_autenticar;
    }
    
    public function getCodigo_generado1()
    {
        return $this->Codigo_generado;
    }
    
    function __construct()
    {

    }
    
    
    function actualice_codigo_BD($usuario){
         try{
             //mycryp esta descontinuado
            
            $cypherMethod = 'AES-256-CBC';
            $key = random_bytes(32);
            $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cypherMethod));
            $rango=rand(100000,999999);
            $Codigo_aleatorio = crypt($rango);
             $this->Codigo_generado= $rango;
           // $Codigo_aleatorio = openssl_encrypt($rango, $cypherMethod, $key, $options=0, $iv);
            
             

        
          $con1 = new Conexion; //primero instanciamos para que guarde en memoria los datos del constructor
              
                 $query = "UPDATE `Usuarios` SET `codigo_autenticacion`='$Codigo_aleatorio' WHERE nombre_usuario='$usuario'"; //creamos el query tal cual esta en phpmyadmin
   

            	 $sql = mysqli_query($con1->conectese(),$query); //creamos la variable sql y por medio del mysqli_query, mandamos la conexion y el query
     	 
	             $con1->desconectese();
         
            
        }catch(PDOException $e1)
        {
           return print('<script>alert("algo paso en buscar usuario");</script>');
            $con1->desconectese();
        }
        
    }
    
    function buscar_codigo_BD($usuario){
         try{
         
          $con1 = new Conexion; //primero instanciamos para que guarde en memoria los datos del constructor
                 
                // $query = "SELECT `id_usuario`, `nombre_usuario`, `codigo_autenticacion` FROM `Usuarios` WHERE nombre_usuario='$usuario'"; //creamos el query tal cual esta en phpmyadmin
                 $query = "SELECT `codigo_autenticacion`, Personas.correo as `correo_electronico` FROM `Usuarios` INNER JOIN Personas ON Usuarios.Personas_id_persona = Personas.id_persona WHERE Usuarios.nombre_usuario='$usuario'"; //creamos el query tal cual esta en phpmyadmin
    

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
            		$rere3 = $row[correo_electronico];
            		$this->Email = $rere3;
            		 }
            		 
     
    
            		 $con1->desconectese();
            		 
                 return $this->Codigo_autenticar;  
            	     
            	 }
         
            
        }catch(PDOException $e1)
        {
           return print('<script>alert("algo paso en buscar usuario");</script>');
            $con1->desconectese();
        }
        
    }
    
    function envielo($usuario,$codigo2,$correo1){
        
        try{

             //mycryp esta descontinuado
            
            $cypherMethod = 'AES-256-CBC';
            $key = random_bytes(32);
            $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cypherMethod));
           // $encryptedData = openssl_encrypt($codigo2, $cypherMethod, $key, $options=0, $iv);
            $codigo = $this->Codigo_generado;
 

                $to      = $correo1; //$email; // Send email to our user
                $subject = 'Inicio de Sesion | Verificacion - GLOBEX '; // Give the email a subject 
                $message = '
                
                Gracias por iniciar sesion con nosotros!
                Para verificar tu acceso al sistema , hemos creado un codigo de autenticacion para que lo ingreses y comprobar que eres tu!
                
                ------------------------
                Usuario: '.$usuario.'
                Codigo de autenticacion: '.$codigo.'
                ------------------------
                
                Please click this link to activate your account:
                
                
                
                
                '; // Our message above including the link
                         
                $headers = 'From:Globex@corporation.co' . "\r\n"; // Set from headers
                mail($to, $subject, $message, $headers); // Send our email
               
 //require_once("/home4/globexco/public_html/Pagina_AdobeXD/Correo/phpmailer/phpmailer/src/PHPMailer.php");              
//$mail = new PHPMailer(true);

/*
 require_once("/home4/globexco/public_html/Pagina_AdobeXD/Correo/vendor/phpmailer/phpmailer/src/Exception.php"); 
  require_once("/home4/globexco/public_html/Pagina_AdobeXD/Correo/vendor/phpmailer/phpmailer/src/PHPMailer.php"); 
  require_once("/home4/globexco/public_html/Pagina_AdobeXD/Correo/vendor/phpmailer/phpmailer/src/SMTP.php"); 

 global $mail;
    // Configure PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Configure SMTP Server
    $mail->Host = 'shared28.hostgator.co';
    $mail->Username = 'pipear07@hotmail.com';
    $mail->Password = 'Portayyo';

    // Configure Email
    $mail->setFrom('pipear07@hotmail.com', 'Name');
    $mail->addAddress('pipear07@hotmail.com');
    $mail->Subject = 'PHPMailer SMTP';
    $mail->isHTML(true);
    $mail->Body = 'This is the HTML message body <strong>in bold!</strong>';

    // send mail
    $mail->Send();

*/
   print("<script>alert('Si el correo coincide con alguno de nuestros registros, enviaremos un codigo de autenticacion a tu correo. Revisa tu SPAM si no llega a tu bandeja de entrada.');</script>");
          
            
        }catch(Exception $e){
             echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        
    }
    
}


?>