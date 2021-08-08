<?php
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Diseno_Login/Captchav2.php");

class canal_datos2 extends reCaptchav2{
    
}

if (isset($_POST['loginBtn2'])) { //si existe


$venus = new reCaptchav2;
$venus->verifica_captchav2(); 
}





?>