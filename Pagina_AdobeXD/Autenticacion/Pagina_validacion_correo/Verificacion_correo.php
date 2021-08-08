<?php
//$banana = $_GET["username"];
//require_once ('/home4/globexco/public_html/Pagina_AdobeXD/Autenticacion/Pagina_validacion_correo/csrf-magic-1.0.4/csrf-magic.php');
session_start() or die('Error iniciando gestor de variables de sesion');
//require_once("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
//require_once ('/home4/globexco/public_html/Pagina_AdobeXD/Autenticacion/Pagina_validacion_correo/csrf-magic-1.0.4/csrf-magic.php');

//print("<script>alert('$_GET[username]');</script>"); //este funciona, que camello
print("<script>console.log('$_GET[username]');</script>");



if (!isset($_GET[username])) {
   // echo "no existe, inicializamos";
//    $_SESSION['count'] = 0;
} else {
    //  echo "existe, sumamos";
    $_SESSION[user] = $_GET[username];
}

//print("<script>alert('$_SESSION[user]');</script>");
///home4/globexco/public_html/Pagina_AdobeXD/Autenticacion/Canal_principal.php


//echo '<br /><a href="https://www.globex2021.com/Pagina_AdobeXD/Diseno_Login/Login.php">página 1</a>';
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Autenticacion/Autenticaciones/Correo_electronico.php");

//print("<script>alert($_SESSION[beta]);</script>");



//nota: los canales principales es donde yo llamo todas las clases en el php, la clase madre donde llama todo
if ($_SERVER['REQUEST_METHOD'] === 'POST')
  {
      
    //  echo "<script>alert("'$_GET[username]'");</script>";
   
       // print("<script>alerta('bebe');</script>");
      $verify = new Verificaciones;
     // $sera = new Datos_login;
      $verify->seleccionar_correo_codigo($_SESSION[user]);
     print("<script>console.log('$_SESSION[user]');</script>"); 
    
  
    $beta = $verify->getCodigo_autenticacion(); //verifique si esa es la clave
   
      if(hash_equals($verify->getCodigo_autenticacion(),crypt($_POST["codigo_verificacion"], $verify->getCodigo_autenticacion()))){

          print("<script>alert('CORRECTO ACCESO CONCEDIDO'".");</script>");
          print '<script>window.location="https://www.globex2021.com/Pagina_AdobeXD/Acceso_sistema/index.php";</script>';
      }else{
          print("<script>alert('codigo invalido');</script>");
      }
      
  }



?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Validacion de Correo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body onload="Javascript:history.go(1);" onunload="Javascript:history.go(1);"> 
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Verificacion de correo electronico</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row justify-content-center">
							<div class="col-lg-8 mb-5">
								<div class="row">
									<div class="col-md-4">
										<div class="dbox w-100 text-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text">
						            <p><span>Ubicacion:</span> </p>
						          </div>
					          </div>
									</div>
									<div class="col-md-4">
										<div class="dbox w-100 text-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text">
						            <p><span>Celular:</span> <a href="tel://1234567920"></a></p>
						          </div>
					          </div>
									</div>
									<div class="col-md-4">
										<div class="dbox w-100 text-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text">
						            <p><span>Correo:</span> <a href="mailto:info@yoursite.com"></a></p>
						          </div>
					          </div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="contact-wrap">
									<h3 class="mb-4 text-center">Se ha enviado un codigo a la siguiente direccion: *******************@************ por favor coloque el numero de autenticacion que enviamos a su correo por bandeja de entrada o SPAM</h3>
									<div id="form-message-warning" class="mb-4 w-100 text-center"></div> 
				      		<div id="form-message-success" class="mb-4 w-100 text-center">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
												<input type="number" class="form-control" name="codigo_verificacion" id="codigo_verificacion1" placeholder="Codigo Verificacion" required pattern="[0-9]{5,6}>
												</div>
											</div>
											
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Comprobar" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


  <script src="js/bootstrap.min.js"></script>
  <!-- Llamar al evitar recargar pagina con datos -->
      <script type="text/javascript" src="https://www.globex2021.com/Pagina_AdobeXD/Seguridad/Evitar_reenvio_Paginas.js" script>
	</body>
</html>

