    function myFunction() {
        alert("PARA ACCEDER A NUESTRO CONTENIDO, POR FAVOR REGISTRATE");
    }

    function probarconexion() {
        window.open("./Web_1920___28.php", "Diseño Web", "width=300, height=200")
    }
    
    function Abrir_login() {
    
        open.location.href = "https://www.globex2021.com/Pagina_AdobeXD/Login.php";
    }
    
    function miFuncion() 
    {
        var response = grecaptcha.getResponse();
    
        if(response.length == 0){
          alert("Captcha no verificado");
        } else {
          alert("Captcha verificado");
         // window.locationf="https://www.globex2021.com/Pagina_AdobeXD/Logica_login.php";
        }
    }

    
    function ocultar_error_usuario() {
    document.getElementById("error_usuario").style.display = "none"; //block para mostrar - none para esconder
    }
    
    function objetoAjax()
    {
    var xmlhttp=false;
    
    try{
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }catch(e){
        try{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(E){
                xmlhttp=false;
            }
    }
    
    if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
        xmlhttp = new XMLHttpRequest();
    }
    
    return xmlhttp;
    
    }
    
     function enviar() {
        valor = document.getElementById('error_usuario').value;
        ajax = objetoAjax();
        ajax.open("POST","https://www.globex2021.com/Pagina_AdobeXD/Login.php",true);
      
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4){
                document.getElementById("resultado").innerHTML=ajax.responseText;
                  alert("no fucnuio");
            }
        }
    }

    function mostrar_error_usuario() {
    
    document.getElementById("error_usuario").style.display = "block";
    document.getElementById("error_usuario").innerText = "Usuario y clave son invalidos, rectifique dsddcdsdczsdcd";
    
    }
    
  //  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  //  ajax.send("varp2="+valor);


