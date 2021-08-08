<?php
require("/home4/globexco/public_html/Pagina_AdobeXD/Registro/Concentrar_datos.php"); //EL PROBLEMA ERA ESTE, hosting
//require_once("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Evitar_reenvio_Paginas.js");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate en Globex</title>




<!-- Evitar el reenvio de la pagina-->
 <script type="text/javascript" src="/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Evitar_reenvio_Paginas.js"></script>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="css/passStrength.css">

     <!-- Toca cargar primero el jQuery antes que el bootstrap-->
 <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>


    <!-- Framework Bootstrap 4.0 y Styles de la pagina con colorlib v6 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
    <script src="js/bootstrap.min.js"></script>


</head>
<body>
    <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">
            <h1>Registrate</h1>
            <form id="form_ajax" class="form-detail" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="form-group">
                    <label for="primer_nombre1">Nombres:</label>
                    <input type="text" class="form-control" name="primer_nombre" id="primer_nombre1" required placeholder="Primer Nombre" pattern="[A-Za-z0-9_-]{1,40}">
                </div>
                
                <div class="form-group">
                <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre1" placeholder="Segundo Nombre" pattern="[A-Za-z0-9_-]{1,40}">
                </div>
                
                
                <div class="form-group">
                    <label for="primer_apellido1">Apellidos:</label>
                    <input type="text" class="form-control" name="primer_apellido" id="primer_apellido1" required placeholder="Primer Apellido" pattern="[A-Za-z0-9_-]{1,40}">
                </div>
                
                <div class="form-group">
                <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido1" placeholder="Segundo Apellido" pattern="[A-Za-z0-9_-]{1,40}">
                </div>
                
                <div class="form-group">
                    <label for="email1">Correo Electronico:</label>
                    <input type="email" class="form-control" name="email" id="email1" placeholder="Correo" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div>
                
                 <div class="form-group">
                    <label for="celular1">Celular:</label>
                    <input type="number" class="form-control" name="celular" id="celular1" placeholder="Numero celular" required pattern="^[9|8|6|3]\d{9}$">
                </div>
                
                 <div class="form-group">
                    <label id="titulo_loggeo" for="usuario1">Datos de Loggeo:</label>
                    <br>
                    <label for="usuario">Usuario:</label>
                    <input type="text" class="form-control" name="usuario" id="usuario1" placeholder="Nombre Usuario" required pattern="[A-Za-z0-9_-]{1,40}">
                </div>
                
                
                 <div id="myform" class="form-group">
                <label for="usuario">Clave:</label>
                <input type="password" name="password" id="password1" class="form-control" placeholder="Digite Clave" required pattern="(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[*#%&+-])(?!.*(.)\1{2})\S{12,64}">
                </div>
                
                 <div class="form-group">
                <input type="password" name="comfirm-password" id="comfirm-password1" class="form-control" placeholder="Repetir Clave" required pattern="(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[*#%&+-])(?!.*(.)\1{2})\S{12,64}">
                </div>
                

                <div class="form-check" >
                <input  type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">En cumplimiento a lo establecido en la Ley 1581 de 2012 “Por medio de la cual se dictan disposiciones generales para la Protección de Datos Personales”, se informa que los datos aportados a través de este instrumento serán manejados únicamente con fines académicos.</label>
                </div>
                <br>
                <div class="form-group">
                    <button id="registrar" type="submit" class="btn btn-success btn-lg">Registrate Aqui</button>
                </div>
  <script type="text/javascript" src="ejemplo/strength.js"></script>
<script type="text/javascript" src="ejemplo/js.js"></script>
<link rel="stylesheet" type="text/css" href="ejemplo/strength.css">


 <script >

</script>


<link rel="stylesheet" type="text/css" href="ejemplo2/strength.css">
<script>
 document.getElementById('registrar').disabled=true;

        
        $('#password1').strength({
        strengthClass: 'strength',
        strengthMeterClass: 'strength_meter',
        strengthButtonClass: 'button_strength',
        strengthButtonText: 'Mostrar Clave',
        strengthButtonTextToggle: 'Ocultar Clave'
    }); 
    

    
    
$('input[type=checkbox]').on('change', function() {
    if ($(this).is(':checked') ) {
      //  console.log("Checkbox " + $(this).prop("id") +  " (" + $(this).val() + ") => Seleccionado");
        document.getElementById('registrar').disabled=false;
    } else {
     //   console.log("Checkbox " + $(this).prop("id") +  " (" + $(this).val() + ") => Deseleccionado");
document.getElementById('registrar').disabled=true;
    }
});
</script>


  <script type="text/javascript" src="ejemplo2/strength.js"></script>
<script type="text/javascript" src="ejemplo2/js.js"></script>
<link rel="stylesheet" type="text/css" href="ejemplo2/strength.css">

<script>
/*
    $('#comfirm-password1').strength({
        strengthClass: 'strength',
        strengthMeterClass: 'strength_meter2',
        strengthButtonClass: 'button_strength',
        strengthButtonText: 'Mostrar Clave',
        strengthButtonTextToggle: 'Ocultar Clave'
    }); 
    */
</script>


        
            </form>
        </div>
    </div>
</body>
</html>