<?php
require("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Globex - Documentacion Juridica</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <h1 class="site-heading text-center text-white d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Bienvenido a GLOBEX</span>
            <span class="site-heading-lower">Legislacion en informatica</span>
        </h1>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.html">En globex no tenemos relleno</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php">
                                Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active px-lg-4"><a class="nav-link text-uppercase text-expanded" href="documentacion.html">Preguntas y Respuestas</a></li>
     
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section about-heading">
            
  <div id="confirma" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Guardar los datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                      <span  aria-hidden="true">&times;</span>
                                        </button> 
      </div>
      <div class="modal-body">
        <p>¿Desea guardar las respuestas correctas?</p>
      </div>
      <div class="modal-footer">
        <button id="guarda1" type="button" class="btn btn-primary">Guardar cambios</button>
        <button id="cancela1" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



          <div id="confirma2" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mensaje de confirmacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                      <span  aria-hidden="true">&times;</span>
                                        </button> 
      </div>
      <div class="modal-body">
        <p>Se han guardado con exito!</p>
      </div>
      <div class="modal-footer">
        <button id="guarda2" type="button" class="btn btn-primary">Listo</button>

      </div>
    </div>
  </div>
</div>



            
            
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Formulario De Preguntas</span>
                                    <span class="section-heading-lower">Comprueba que tanto has aprendido en Globex </span>
                                </h2>
                                <div id="preguntas">
                                    <div class=”btn-group-toggle” data-togle=”buttons”>
                                        <label>
                                            1) Acceso abusivo a un sistema informatico, pertenece a que articulo.
                                            <br>
                                            <input id="Preg1" type="text">
                                            <i id="check1" class="fas fa-check"></i>
                                                 <img id="llamar_simbolo_x6" src="open-iconic-master/svg/circle-x.svg" alt="circle-x">
                                      <span id="imagen_de_x6" class="iconic iconic-circle-x-lg" title="circle x" aria-hidden="true"></span>
                        
                                        </label>
                                    </div>
                                    <div class=”btn-group-toggle” data-togle=”buttons”>
                                        <label>
                                            2) Articulo 269D Daño informático Corresponde a:
                                            <br>
                                            <input id="Preg2" type="text">
                                            <i id="check2" class="fas fa-check"></i>
                                                 <img id="llamar_simbolo_x7" src="open-iconic-master/svg/circle-x.svg" alt="circle-x">
                                      <span id="imagen_de_x7" class="iconic iconic-circle-x-lg" title="circle x" aria-hidden="true"></span>
                        
                                        </label>
                                    </div>
                                    <div class=”btn-group-toggle” data-togle=”buttons”>
                                        <label>
                                            3)¿Que significa el acronimo Copnia?
                                            <br>
                                            <input id="Preg3" type="text">
                                            <i id="check3" class="fas fa-check"></i>
                                                 <img id="llamar_simbolo_x8" src="open-iconic-master/svg/circle-x.svg" alt="circle-x">
                                      <span id="imagen_de_x8" class="iconic iconic-circle-x-lg" title="circle x" aria-hidden="true"></span>
                        
                                        </label>
                                    </div>
                                    <div class=”btn-group-toggle” data-togle=”buttons”>
                                        <label>
                                            4)¿Es El organo del estado que se responsabiliza de la propiedad industrial y por la protecion de datos personales?
                                            <br>
                                            <input id="Preg4" type="text">
                                            <i id="check4" class="fas fa-check"></i>
                                                 <img id="llamar_simbolo_x9" src="open-iconic-master/svg/circle-x.svg" alt="circle-x">
                                      <span id="imagen_de_x9" class="iconic iconic-circle-x-lg" title="circle x" aria-hidden="true"></span>
                        
                                        </label>
                                    </div>
                                    <div class=”btn-group-toggle” data-togle=”buttons”>
                                        <label>
                                            5)¿A que hace referente la ley 1581 del 2012?
                                            <br>
                                            <input id="Preg5" type="text">
                                            <i id="check5" class="fas fa-check"></i>
                                                 <img id="llamar_simbolo_x10" src="open-iconic-master/svg/circle-x.svg" alt="circle-x">
                                      <span id="imagen_de_x10" class="iconic iconic-circle-x-lg" title="circle x" aria-hidden="true"></span>
                        
                                        </label>
                                    </div>
                                    <div class=”btn-group-toggle” data-togle=”buttons”>
                                        <label>
                                            6)¿Nombre un principio de la ley 1581 de 2012?
                                            <br>
                                         
                                            <input id="Preg6" type="text">
                                            <i id="check6" class="fas fa-check"></i>
                             <!-- Bootstrap - Importe una libreria con los ultimos iconos modernos compatible con algunos frameworks, que es la etiqueta img, si quiere un icono, tendra que buscar en la pagina que icono quiere y cambiarlo por donde esta la carpeta icon magic-->
                             <!-- Recuerde que el img es solo para importar la carpeta, ya de resto el span usted lo conoce como se llaman las clases -->
                                               <img id="llamar_simbolo_x1" src="open-iconic-master/svg/circle-x.svg" alt="circle-x">
                                      <span id="imagen_de_x1" class="iconic iconic-circle-x-lg" title="circle x" aria-hidden="true"></span>
                        
                        
                        
                    <!-- Francisco, yo solo le agregue este codigo, despues de haber estudiado su logica. No quite nada -->                       
                                          <div id="error_mensaje_wachi" class="alert alert-warning alert-dismissible fade show" role="alert">  
                                            <strong>¡Error papu!</strong> Como se le ocurre pensar en uribe
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span  aria-hidden="true">&times;</span>
                                        </button> 
                                      </div>
                        <!-- Lo que usted mira en comentarios es lo que agregue, hay miles de librerias de iconos para bootstrap 4.x   -->                 
                                          <!--https://getbootstrap.com/docs/4.1/components/carousel/  En esta pagina esta todo y bien explicado las clases de los bootstrap de todas las generaciones-->
                                      
                                        </label>
                                    </div>
                                    <div class=”btn-group-toggle” data-togle=”buttons”>
                                        <label>
                                            7)¿Clasificacion de datos personales segun la ley 1266 del 2008 y el decreto 1377 del 2013?
                                            <br>
                                            <input id="Preg7" type="text">
                                            <i id="check7" class="fas fa-check"></i>
                                              <img id="llamar_simbolo_x2" src="open-iconic-master/svg/circle-x.svg" alt="circle-x">
                                      <span id="imagen_de_x2" class="iconic iconic-circle-x-lg" title="circle x" aria-hidden="true"></span>
                                        </label>
                                    </div>
                                    <div class=”btn-group-toggle” data-togle=”buttons”>
                                        <label>
                                            8)¿cual es la ley que regula el Copnia?
                                            <br>
                                            <input id="Preg8" type="text">
                                            <i id="check8" class="fas fa-check"></i>
                                              <img id="llamar_simbolo_x3" src="open-iconic-master/svg/circle-x.svg" alt="circle-x">
                                      <span id="imagen_de_x3" class="iconic iconic-circle-x-lg" title="circle x" aria-hidden="true"></span>
                                        </label>
                                    </div>
                                    <div class=”btn-group-toggle” data-togle=”buttons”>
                                        <label>
                                            9)¿Que documento expide Copnia?
                                            <br>
                                            <input id="Preg9" type="text" required>
                                            <i id="check9" class="fas fa-check"></i>
                                              <img id="llamar_simbolo_x4" src="open-iconic-master/svg/circle-x.svg" alt="circle-x">
                                      <span id="imagen_de_x4" class="iconic iconic-circle-x-lg" title="circle x" aria-hidden="true"></span>
                                        </label>
                                    </div>
                                    <div  class=”btn-group-toggle” data-togle=”buttons”>
                                        <label>
                                            10)¿Nombre las dos ramas de la propiedad intelectual?
                                            <br>
                                            <input id="Preg10" type="text">
                                            <i id="check10" class="fas fa-check"></i>
                                              <img id="llamar_simbolo_x5" src="open-iconic-master/svg/circle-x.svg" alt="circle-x">
                                      <span id="imagen_de_x5" class="iconic iconic-circle-x-lg" title="circle x" aria-hidden="true"></span>
                                        </label>
                                    </div>
                                </div>
                                    <button id="Btn-Evaluar" class=”btn btn-primary”>Evaluar</button>
                                    <div  id="error_usuario" class="alert alert-danger" role="alert">
                    		              Todos los campos son requeridos
                    		        </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright © Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
        <script>
        $( document ).ready(function() {
        $("#error_usuario").hide();
        $("#check1").hide();$("#check2").hide();$("#check3").hide();
        $("#check4").hide();$("#check5").hide();$("#check6").hide();
        $("#check7").hide();$("#check8").hide();$("#check9").hide();
        $("#check10").hide(); $("#error_mensaje_wachi").hide(); //EN LAS ETIQUETAS LE DEJE UN MENSAJE EN LA PREGUNTA 6
       $("#imagen_de_x1").hide(); $("#llamar_simbolo_x1").hide();
       $("#imagen_de_x2").hide(); $("#llamar_simbolo_x2").hide();
       $("#imagen_de_x3").hide(); $("#llamar_simbolo_x3").hide();
       $("#imagen_de_x4").hide(); $("#llamar_simbolo_x4").hide();
       $("#imagen_de_x5").hide(); $("#llamar_simbolo_x5").hide();
       $("#imagen_de_x6").hide(); $("#llamar_simbolo_x6").hide();
       $("#imagen_de_x7").hide(); $("#llamar_simbolo_x7").hide();
       $("#imagen_de_x8").hide(); $("#llamar_simbolo_x8").hide();
       $("#imagen_de_x9").hide(); $("#llamar_simbolo_x9").hide();
       $("#imagen_de_x10").hide(); $("#llamar_simbolo_x10").hide();
       $("#confirma").hide();$("#confirma2").hide();
        });
        
         $(document).on("click", "#guarda1", function () {
         
          $("#confirma").hide(); 
          $("#confirma2").show();
         });
         
          $(document).on("click", "#guarda2", function () {
         
          $("#confirma2").hide(); 
          window.location="https://www.globex2021.com/Pagina_AdobeXD/Acceso_sistema/index.php";
         });
        
         $(document).on("click", "#cancela1", function () {
         
          $("#confirma").hide();
          $("input").prop('disabled', false);
          $("#Btn-Evaluar").show();
         });
        
    $(document).on("click", "#Btn-Evaluar", function () {
        var Preg1 = $('#Preg1').val(); var Preg2 = $('#Preg2').val();
        var Preg3 = $('#Preg3').val(); var Preg4 = $('#Preg4').val();
        var Preg5 = $('#Preg5').val(); var Preg6 = $('#Preg6').val();
        var Preg7 = $('#Preg7').val(); var Preg8 = $('#Preg8').val();
        var Preg9 = $('#Preg9').val(); var Preg10 = $('#Preg10').val();
       
       
      
            
        $("#preguntas" ).each(function() {
            if (typeof $('#Preg1').val() == "" || $('#Preg2').val() == ""
                    || $('#Preg3').val() == "" || $('#Preg4').val() == ""
                    || $('#Preg5').val() == "" || $('#Preg6').val() == ""
                    || $('#Preg7').val() == "" || $('#Preg8').val() == ""
                    || $('#Preg9').val() == "" || $('#Preg10').val() == "")
            {
                 $("#error_usuario").show();
                 
            }else
            {
               $("#error_usuario").hide();
               $("#preguntas" ).each(function() {
                   $("input").prop('disabled', true);
               });
               $("#confirma").show();
               $("#Btn-Evaluar").hide();
               var bandera = true; //aqui va
               
            }
            if(bandera)
            {
                if (Preg1 == "269A" || Preg1 == "269a" ||Preg1 == "Articulo 269a" ||Preg1 == "articulo 269a" ||Preg1 == "Artículo 269A" ||Preg1 == "1" ) {
                    $("#check1").show();
                    $("#llamar_simbolo_x6").hide();
                    $("#imagen_de_x6").hide();
                }else
                {
                   $("#check1").hide();
                    $("#llamar_simbolo_x6").show();
                    $("#imagen_de_x6").show(); 
                }
                if (Preg2 == "destruya" || Preg2 == "dañe" || Preg2 == "borre" || Preg2 == "deteriore" || Preg2 == "altere" || Preg2 == "suprima") {
                    $("#check2").show();
                     $("#llamar_simbolo_x7").hide();
                    $("#imagen_de_x7").hide();
                }else
                {
                   $("#check2").hide();
                   $("#llamar_simbolo_x7").show();
                    $("#imagen_de_x7").show();
                }
                if (Preg3 == "Consejo De ingeniría" ||Preg3 == "Profesionales en ingeniría" || Preg3 == "Consejo Profesional Nacional De Ingeniría" ||Preg3 == "1" ) {
                    $("#check3").show();
                     $("#llamar_simbolo_x8").hide();
                    $("#imagen_de_x8").hide();
                }else
                {
                   $("#check3").hide();
                   $("#llamar_simbolo_x8").show();
                    $("#imagen_de_x8").show();
                }
                if (Preg4 == "SIC" ||Preg4 == "sic" ||Preg4 == "1") {
                    $("#check4").show();
                     $("#llamar_simbolo_x9").hide();
                    $("#imagen_de_x9").hide();
                }else
                {
                   $("#check4").hide();
                   $("#llamar_simbolo_x9").show();
                    $("#imagen_de_x9").show();
                }
                if (Preg5 == "Regimen general de protecion de datos personales" ||Preg5 == "regimen general de protecion de datos personales" ||Preg5 == "1") {
                    $("#check5").show();
                     $("#llamar_simbolo_x10").hide();
                    $("#imagen_de_x10").hide();
                }else
                {
                   $("#check4").hide();
                   $("#llamar_simbolo_x10").show();
                    $("#imagen_de_x10").show();
                }
                if (Preg6 == "Legaliad" ||Preg6 == "Libertad" ||Preg6 == "finalidad"||Preg6 == "Transparencia" ||Preg6 == "1") {
                    $("#check6").show();
                     $("#llamar_simbolo_x1").hide();
                    $("#imagen_de_x1").hide();
                }else
                {  
                   $("#check6").hide();
                   $("#llamar_simbolo_x1").show();
                   $("#imagen_de_x1").show(); 
                }
                if (Preg7 == "Dato publico" ||Preg7 == "Dato privado" ||Preg7 == "Dato Semi-privado"||Preg7 == "Datos Sensibles" ||Preg7 == "1") {
                    $("#check7").show();
                     $("#llamar_simbolo_x2").hide();
                    $("#imagen_de_x2").hide();
                }else
                {
                   $("#check7").hide();
                   $("#llamar_simbolo_x2").show();
                   $("#imagen_de_x2").show(); 
                }
                if (Preg8 == "Ley 94 de 1937" ||Preg8 == "ley 94 de 1937" ||Preg8 == "1" ||Preg8 == "1") {
                    $("#check8").show();
                     $("#llamar_simbolo_x3").hide();
                    $("#imagen_de_x3").hide();
                }else
                {
                   $("#check8").hide();
                    $("#llamar_simbolo_x3").show();
                   $("#imagen_de_x3").show(); 
                }
                if (Preg9 == "Tarjeta profesional" ||Preg9 == "Tarjeta De Matricula Profesional Para Ingenieros" ||Preg9 == "1") {
                    $("#check9").show();
                     $("#llamar_simbolo_x4").hide();
                    $("#imagen_de_x4").hide();
                }else
                {
                   $("#check9").hide();
                         $("#llamar_simbolo_x4").show();
                   $("#imagen_de_x4").show(); 
                }
                if (Preg10 == "Propiedad industrial y derechos de autor" ||Preg10 == "Derechos de autor y Propiedad intelectual" ||Preg10 == "1") {
                    $("#check10").show();
                     $("#llamar_simbolo_x10").hide();
                    $("#imagen_de_x10").hide();
                }else
                {
                   $("#check10").hide();
                    $("#llamar_simbolo_x5").show();
                    $("#imagen_de_x5").show(); 
                }
                
                
                
                 
                
            }
        });
        
        
   });
   
   
</script>
    </body>
    
</html>

