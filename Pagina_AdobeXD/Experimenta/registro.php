<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(function()
    {
         $("#btn_ajax").click(function(){
 var url = "https://www.globex2021.com/Pagina_AdobeXD/Experimenta/ajax.php"; // El script a dónde se realizará la petición.
    $.ajax({
           type: "POST",
           url: url,
           data: $("#form_ajax").serialize(), // Adjuntar los campos del formulario enviado.
           success: function(data)
           {
               $("#e_nombre").html('');
               $("#e_email").html('');
               $("#e_password").html('');
               $("#e_repetir_password").html('');
               $("#mensaje").html(data); // Mostrar la respuestas del script PHP.
           }
         });

    return false; // Evitar ejecutar el submit del formulario.
 });
    });
    </script>
</head>
<body>
    <h1>Formulario de registro</h1>
    <div id="mensaje"></div>
<form method="POST" id="form_ajax" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <table>
        <tr>
            <td>Nombre:</td>
            <td>
                <input type="text" name="nombre">
                <div id="e_nombre"></div>
            </td>
        </tr>
               <tr>
            <td>Email:</td>
            <td>
                <input type="email" name="email">
                <div id="e_email"></div>
            </td>
        </tr>
               <tr>
            <td>Password:</td>
            <td>
                <input type="password" name="password">
                <div id="e_password"></div>
            </td>
        </tr>
               <tr>
            <td>Repetir password:</td>
            <td>
                <input type="password" name="repetir_password">
                <div id="e_repetir_password"></div>
            </td>
        </tr>
    </table>
    <input type="hidden" name="ajax">
    <input type="button" id="btn_ajax" value="Enviar">
</form>
</body>
</html>

