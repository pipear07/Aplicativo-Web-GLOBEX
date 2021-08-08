<?php
$secure = true;
    $httponly = true;
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
      $action = "error";
      $error = "No se pudo iniciar una sesion segura (ini_set)";
    }
    $cookieParams = session_get_cookie_params();
    $path = "/"; //COMO YO UTILIZO HOSTING EL PATH ES DONDE ESTA EL PROYECTO, EN ESTE CASO EL / ES DEL DIRECTORIO --Google cookies pag 76 4.5

    $samesite = 'strict';
    session_set_cookie_params([
      'lifetime'=> $cookieParams["lifetime"],
      'path' => $path,
      'domain' => $_SERVER['HTTP_HOST'],
      'secure' => $secure,
      'httponly' => $httponly,
      'samesite' => $samesite
    ]);
    session_start();
    session_regenerate_id(true);
?>