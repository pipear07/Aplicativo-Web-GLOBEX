<?php
require("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
 require_once("/home4/globexco/public_html/Pagina_AdobeXD/Cambiar_clave/Logica_cambiar_clave/Cambio_por_correo_o_usuario.php");

//require_once ('/home4/globexco/public_html/Pagina_AdobeXD/Autenticacion/Pagina_validacion_correo/csrf-magic-1.0.4/csrf-magic.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST')
  {
      $iniciar = new Cambiando_clave;
 //    print ("<script>alert('$_POST[password]');</script>");
 //    print ("<script>alert('$_POST[clave_actual]');</script>");
      $iniciar->Buscar_datos($_POST['usuario_correo']);
      $isPasswordCorrect = password_verify($_POST['clave_actual'], $iniciar->getContraActual());
 //    print ("<script>alert('$_POST[clave_actual]');</script>");
     //password_hash($_POST['clave-actual'],PASSWORD_BCRYPT)
      
      if($isPasswordCorrect==true){
          print ("<script>alert('La clave actual coincide');</script>");
          $iniciar->Cambie_la_clave(password_hash($_POST['password'],PASSWORD_BCRYPT));
           print ("<script>alert('OPERACION EXITOSA - Se cambio la clave');</script>");
           print ('<script>window.location="https://www.globex2021.com/Pagina_AdobeXD/Diseno_Login/Login.php";</script>');
      }else{
          print ("<script>alert('La clave actual no coincide. Por favor revise su clave actual');</script>");
      }
    //print ("<script>alert('$_POST[usuario_correo]');</script>");  
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AuThemes Templates">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="AuThemes Templates">

    <!-- Title Page-->
    <title>Cambia tu contraseña</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

<!-- Evitar el reenvio de la pagina-->
 <script type="text/javascript" src="/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Evitar_reenvio_Paginas.js"></script>

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-img-1 p-t-275 p-b-100">
        <div class="wrapper wrapper--w820">
            <div class="card card-1">
                <div class="card-heading">
                    <h2 class="title">Cambia tu contraseña</h2>
                </div>
                <div class="card-body">
                    <form class="wizard-container" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="js-wizard-form">
                        <ul class="tab-list">
                            
                            <li class="tab-list__item">
                                <a class="tab-list__link" href="#tab2" data-toggle="tab">
                                    <span class="step">1</span>
                                    <span class="desc">Correo</span>
                                </a>
                            </li>
                             <li class="tab-list__item">
                                <a class="tab-list__link" href="#tab5" data-toggle="tab">
                                    <span class="step">2</span>
                                    <span class="desc">Digite Clave Actual</span>
                                </a>
                            </li>
                            <li class="tab-list__item">
                                <a class="tab-list__link" href="#tab3" data-toggle="tab">
                                    <span class="step">3</span>
                                    <span class="desc">Nueva Clave</span>
                                </a>
                            </li>
                            <li class="tab-list__item">
                                <a class="tab-list__link" href="#tab4" data-toggle="tab">
                                    <span class="step">4</span>
                                    <span class="desc">Confirmar cla...</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                           
                            <div class="tab-pane" id="tab2">
                                <div class="form" >
                                    <div class="input-group" >
                                        <!--href="https://www.globex2021.com/Pagina_AdobeXD/Cambiar_clave/Logica_cambiar_clave/Verificar_Usuario_Correo.php -->
                                        <input class="input--style-1" name="usuario_correo" type="text" name="email" placeholder="example@tucorreo.com" required="required">
                                        <button class="btn--next" name="btn1_cambio" id="usuario_correo2" type="submit" >Siguiente</button>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab5">
                                <div class="form" >
                                    <div class="input-group" >
                                        <!--href="https://www.globex2021.com/Pagina_AdobeXD/Cambiar_clave/Logica_cambiar_clave/Verificar_Usuario_Correo.php -->
                                        <input class="input--style-1" name="clave_actual" type="text" placeholder="Digite clave actual" required="required">
                                        <a class="btn--next" href="#">Siguiente</a>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="form">
                                    <div class="input-group">
                                        <input class="input--style-1" type="password" name="password" placeholder="Nueva Password" id="password" required="required">
                                        <a class="btn--next" href="#">Siguiente</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab4">
                                <div class="form">
                                    <div class="input-group">
                                        <input class="input--style-1" type="password" name="re_password" placeholder="Repetir Password" required="required">
                                        <button type="submit" name="btn_cambiar" class="btn--next" href="#">Finalizar</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->