<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Tabla ASCII</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php
    ini_set('display_errors','On');
    error_reporting(E_ALL);
    ?>
    <?php
    /*
    CONVIENE RECORDAR:
    Algunos caracteres son de control. Por ejemplo el primero imprimible es el espacio, que es el 32
    chr nos genera ASCII hasta el 127 y luego ANSI
    Habrá que buscar una función que lo pase a unicode.
    Por si acaso, podemos esribir con entidades lo que se pueda
    */
    setlocale(LC_ALL,'es_CU');
    print "<table>\n";
    /* Cabecera de tabla */
        print "<tr>\n";
        print "\t<th></th>\n";
        for($columna=0;$columna<10;$columna++){
            print "\t<th>$columna</th>\n";
        }   
        print "</tr>\n";
    /* Cada fila */ 
        for($fila=0;$fila<25;$fila++){
        print "<tr>\n";
        print "\t<th>".(10*$fila)."</th>\n";
        for($columna=0;$columna<10;$columna++){
            print "\t<td>&#".(10*$fila+$columna).";</td>\n";
        }
        print "</tr>\n";
    }
    print "</table>\n";
    
    print "<p>Una ñ: chr(241):".chr(241)."</p>\n";
    print "<p>Una ñ: chr(241):".utf8_encode(chr(241))."</p>\n";
    print "<p>Una ñ: chr(241):".htmlentities(utf8_encode(chr(241)))."</p>\n";
    ?>
    </body>
</html>