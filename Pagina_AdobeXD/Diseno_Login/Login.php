<?php
//require_once ('/home4/globexco/public_html/Pagina_AdobeXD/Autenticacion/Pagina_validacion_correo/csrf-magic-1.0.4/csrf-magic.php');
require("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
//require("/home4/globexco/public_html/Pagina_AdobeXD/Diseno_Login/Captchav2.php");
require("/home4/globexco/public_html/Pagina_AdobeXD/Diseno_Login/Canal_datos.php");


?>


<!DOCTYPE html>
<html>
    <body id="cuerpo">
<head><meta charset="euc-jp">
    <title>Iniciar Sesion</title>
      
   <head>

</head>
<body onload="Javascript:history.go(1);" onunload="Javascript:history.go(1);">   
  
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">
    
    <!-- Llamar al captcha de google-->
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     
     <!-- Llamar al Javascript del proyecto para el formulario-->
     <script src="https://www.globex2021.com/Pagina_AdobeXD/Web_1920___28F.js"></script>
     
</head>

<body >
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/user.png" th:src="@{/img/user.png}"/>
                </div>
                    <form method="POST" id="form_ajax" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit"miFuncion()">
                    <div class="form-group" id="user-group">
                        <input id="bebe" type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" id="Clave" class="form-control" placeholder="Clave" name="password"/>
                    </div>
                    <br><br><br>
                    <div  id="captcha" class="g-recaptcha" data-sitekey="6LeYp6caAAAAAEucizCDEGtn6MaayIq53fZH-aNM"></div> <br>
                    
                    <button type="submit"  name="loginBtn2" id="loginBtn" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                   
                <div class="col-12 forgot">
                    <a href="https://www.globex2021.com/Pagina_AdobeXD/Cambiar_clave/Pagina_cambio_clave/Cambiar_password.php">Recupera tu clave</a><br><br><br>
                </div>
                
                <body  onload="">
                     <div  id="error_usuario" th:if="${param.error}" class="alert alert-danger" role="alert">
		        usuario y clave Requeridos.
		        </div>
		        <!--<div id= "error_"class="alert alert-success" role="alert">
		            Clave o Usuario Incorrecto -->
		            

		        </div>
            </div>
        </div>
    </div>
</body>


<script>
        // andres asi si el campo esta vacio muestra el label de usuario y clave requeridos sin necesidad de ir al back y hacer las compraciones en la base de datos
        $("#error_usuario").hide();
        //$("#error_").hide();
        $(document).on("click", "#loginBtn", function () {

            if (typeof $('#bebe').val() == "undefined" || $('#bebe').val() == "") {
                 $("#error_usuario").show();
                return false;
            }
            if (typeof $('#Clave').val() == "undefined" || $('#Clave').val() == "") {
                 $("#error_usuario").show();
                return false;
            }
        });
</script> 
</html>
