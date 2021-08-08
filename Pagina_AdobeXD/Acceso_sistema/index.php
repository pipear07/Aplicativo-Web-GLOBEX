<?php
require("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
require_once ('/home4/globexco/public_html/Pagina_AdobeXD/Autenticacion/Pagina_validacion_correo/csrf-magic-1.0.4/csrf-magic.php');
/*
echo '<SCRIPT LANGUAGE="JavaScript">'."\n"; 
echo 'alert("no se puede regresar a la página");'."\n"; 
echo 'history.go(+1);'."\n";
echo '</SCRIPT>'."\n"; 
*/
//header("Last-Modified: " . gmdate("D, d M Y H:i ") . " GMT"); 
//header("Cache-Control: no-store, no-cache, must-revalidate"); 
//header("Cache-Control: post-check=0, pre-check=0", false); 
//header("Pragma: no-cache");


session_start();



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
<body onload="Javascript:history.go(1);" onunload="Javascript:history.go(1);">        
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
                <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.html">En Globex no tenemos relleno</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.html">
                                Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-expanded" href="documentacion.php">Documentacion</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-expanded" href="https://www.globex2021.com/Pagina_AdobeXD/Cerrar_Sesion/Cerrar_sesion.php">Cerrar Sesion</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-expanded" href="store.html">Acerca de</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/intro.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Aprende de leyes</span>
                            <span class="section-heading-lower">podria ser util en la vida</span>
                        </h2>
                        <p class="mb-3">En nuestro mini juego de aprendizaje, le enseñamos que la normatividad en Colombia es importante saberla, para evitarnos problemas en la vida. Lo invitamos a que lo pruebe, aprendera asi sea cualquier cosa ¡se lo garantizamos!</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="formulario.php">Juega ahora!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">El compromiso</span>
                                <span class="section-heading-lower">Depende de ti</span>
                            </h2>
                            <p class="mb-0">Cuando ingresa a nuestra sitio web para comenzar su día, estamos dedicados a brindarle un servicio amable, un ambiente acogedor y, sobre todo, excelente documentacion de la más alta calidad. Si no está satisfecho, háganoslo saber y haremos todo lo posible para arreglar las cosas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright © Globex 2021 - Universidad de Cundinamarca</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
