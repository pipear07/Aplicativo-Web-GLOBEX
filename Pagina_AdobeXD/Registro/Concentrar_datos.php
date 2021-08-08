<?php
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Registro/Enviar_Datos.php");
require_once("/home4/globexco/public_html/Pagina_AdobeXD/Seguridad/Sesion_segura.php"); 
 if ($_SERVER['REQUEST_METHOD'] === 'POST')
  {


     if($_POST["password"]===$_POST["comfirm-password"])
      {
        $envia = new Enviar_Registro($_POST["primer_nombre"],$_POST["segundo_nombre"],$_POST["primer_apellido"],$_POST["segundo_apellido"],$_POST["email"],$_POST["celular"],$_POST["usuario"],$_POST["password"],$_POST["comfirm-password"]);
        $envia->registrarlo();
        $envia->Seleccionar_id(); //PHP NO ME DEJA LLAMAR FUNCIONES DENTRO DE OTRA FUNCION
        $envia->insertar_usuario();
        print ("<script>alert('Se Registro con exito');</script>");
        print ('<script>window.location="https://www.globex2021.com/Pagina_AdobeXD/Diseno_Login/Login.php";</script>');
         

      }else{
           echo '<div id="error_">Las claves no coinciden</div>';
        //print ("<script>alert('LAS CONTRASEÑAS NO COINCIDEN, VERIFIQUE');</script>"); 
      }
     
  }

?>