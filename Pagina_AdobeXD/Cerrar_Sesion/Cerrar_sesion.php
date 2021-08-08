<?php
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 

  session_unset();

  session_destroy();
  header("Last-Modified: " . gmdate("D, d M Y H:i ") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 
header("Pragma: no-cache");


  print '<script>window.location="https://www.globex2021.com/Pagina_AdobeXD/Diseno_Login/Login.php";</script>';
//  header('Location: /home4/globexco/public_html/Pagina_AdobeXD/Diseno_Login/Login.php');

?>

<script language="JavaScript">
window.history.forward(1); //Esto es para cuando le pulse al


window.history.back(1); //Esto para cuando le pulse al botón

</script>