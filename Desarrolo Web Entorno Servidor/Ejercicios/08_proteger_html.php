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
    /*Primera posibilidad. Convertir los caracteres especiales a entidades. Las etiquetas no funcionan*/
    print "<p>Hola ".htmlentities($_GET['nombre'])."</p>\n";
    /*
    Segunda posibilidad: eliminar todas las etiquetas con strip_tags
    */
    print "<p>Hola ".strip_tags($_GET['nombre'])."</p>\n";
    /*
    Tercera posibilidad.
    Usar strip_tags para eliminar las etiquetas pero permitiendo algunas
    */
    print "<p>Hola ".strip_tags($_GET['nombre'],'<a><p><b><i><strong><em>')."</p>\n";
    ?>
    </body>
</html>