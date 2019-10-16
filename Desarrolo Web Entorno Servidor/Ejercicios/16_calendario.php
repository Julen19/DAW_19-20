<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php
    ini_set('display_errors','On');
    error_reporting(E_ALL);
    ?>
    <?php
    setlocale(LC_ALL,'es_ES.utf8','es-ES-utf8','es-ES.utf8');
    /*
    include 'funciones/calendario.php';
    
    Si el fichero no existe, el programa continua y llama a una función inexistente y fracasa.
    
    Si accidentalmente cargamos el fichero dos veces. fatal error porque redeclaramos una función
    
    */
    
    /*
    require  'funciones/calendario.php';
    
    Si el fichero no existe, aborta el programa
    
    Pero si se carga dos veces, redeclara la función
    */
    
    require_once  'funciones/calendario.php';
    require_once  'funciones/calendario.php';
    
    calendario_mes(3);
    ?>
    </body>
</html>