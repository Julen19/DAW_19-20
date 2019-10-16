<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <title>Funciones en PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    ?>
    <?php
    /*
    una función es un trozo de código pensado para ser llamado más de una vez, posiblemente con argumentos / parámetros distintos
    */

    function saludar()
    {
        print "<p>Un saludo</p>\n";
    }

    saludar();

    $dato = "Alumno";
    print "<p>La variable \$dato vale $dato</p>\n";

    /*
    Tengo una variable que voy usando en mi programa y en un momento dado cambiop de opinión
    */


    $dato = 8;
    print "<p>La variable \$dato vale $dato</p>\n";

    $dato = array();
    print "<p>La variable \$dato vale $dato</p>\n";
    
    /*
    Esto da un 
