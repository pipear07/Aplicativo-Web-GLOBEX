<?php
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Logica_login.php");  


class reCaptchav2 extends Datos_Capturados {
     
     public $valida;
     
     /*
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
     */
      function __construct(){}
      
      function verifica_captchav2(){
          
               if ($_SERVER['REQUEST_METHOD'] === 'POST')
            {
            
            # Aquí pon la clave secreta que obtuviste en la página de developers de Google
            define("CLAVE_SECRETA", "6LeYp6caAAAAALllLHbahawwb6Vc-fPRgRhkR8gy");
            
            # Comprobamos si enviaron el dato
            if (!isset($_POST["g-recaptcha-response"]) || empty($_POST["g-recaptcha-response"])) {
            // exit("Debes completar el captcha");
            echo '<div id="error_">'.'Completa el captcha, es obligatorio*'.'</div>';
            }else{
                
                  # Antes de comprobar usuario y contraseña, vemos si resolvieron el captcha
            $token = $_POST["g-recaptcha-response"];
            $verificado = verificarToken($token, CLAVE_SECRETA);
            # Si no ha pasado la prueba
            if ($verificado) {
                
            /**
            * Llegados a este punto podemos confirmar que el usuario
            * no es un robot. Aquí debes hacer lo que se deba hacer, es decir,
            * comprobar las credenciales, darle acceso, etcétera, pues
            * ya ha pasado el captcha
            */
            
              if ($_SERVER['REQUEST_METHOD'] === 'POST')
              {
                // $pruebalo = new Datos_Capturados($_POST["username"],$_POST["password"]);
                 
                  $dat = new Datos_Capturados($_POST["username"],$_POST["password"]);
                  $dat->comenzar_captura();
                  
                  if($dat->getMensaje()==""){
                      //No haga nada
                      $this->valida=true;
                  }else{
                      $this->valida=false;
                      echo '<div id="error_">'.$dat->getMensaje().'</div>';
                  }
              
              }
            // require("/home4/globexco/public_html/Pagina_AdobeXD/Logica_login.php");
            // echo "Has completado la prueba :)";
            } else {
                $this->valida=false;
            // require("/home4/globexco/public_html/Pagina_AdobeXD/Logica_login.php");  
            //  alert("eres un terminator papu ");
             exit("Lo siento, parece que eres un robot");
            
            }
                
            }
            
            
            
            
            }
          
      }
}




/**
 * Verifica el token del captcha y regresa true o false
 * true en caso de que el usuario haya pasado la prueba
 * false en caso contrario
 * 
 * Más información: https://parzibyte.me/blog/2019/08/21/peticion-http-php-json-formulario/
 *
 * @author parzibyte
 * @see https://parzibyte.me/blog
 */
function verificarToken($token, $claveSecreta)
{
    # La API en donde verificamos el token
    $url = "https://www.google.com/recaptcha/api/siteverify";
    # Los datos que enviamos a Google
    $datos = [
        "secret" => $claveSecreta,
        "response" => $token,
    ];
    // Crear opciones de la petición HTTP
    $opciones = array(
        "http" => array(
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => http_build_query($datos), # Agregar el contenido definido antes
        ),
    );
    # Preparar petición
    $contexto = stream_context_create($opciones);
    # Hacerla
    $resultado = file_get_contents($url, false, $contexto);
    # Si hay problemas con la petición (por ejemplo, que no hay internet o algo así)
    # entonces se regresa false. Este NO es un problema con el captcha, sino con la conexión
    # al servidor de Google
    if ($resultado === false) {
        # Error haciendo petición
        return false;
    }

    # En caso de que no haya regresado false, decodificamos con JSON
    # https://parzibyte.me/blog/2018/12/26/codificar-decodificar-json-php/

    $resultado = json_decode($resultado);
    # La variable que nos interesa para saber si el usuario pasó o no la prueba
    # está en success
    $pruebaPasada = $resultado->success;
    # Regresamos ese valor, y listo (sí, ya sé que se podría regresar $resultado->success)
    return $pruebaPasada;
}

?>