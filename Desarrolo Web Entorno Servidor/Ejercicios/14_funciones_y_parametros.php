<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Funciones y Argumentos</title>
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
    A veces, las funciones reciben parámetros.
    Son valores que se le pasan.
    Por ejemplo
    */
    
    function sumar_uno($dato){
        $dato++;
        print "<p>sumar_uno: El dato vale $dato</p>\n";
    }
    
    $dato=8;
    sumar_uno($dato);
    print "<p>principal: El dato vale $dato</p>\n";
    
    sumar_uno(12);

    sumar_uno(12*3);

    /*
    Al llamar a sumar_uno se resuelve primero la expresión entre paréntesis, se copia en la variable $dato de la función y se ejecuta el código
    */
    
    /*
    Hay otras forma en la que en vez de copiar la expresión se "comparte la variable" con la función.
    A esto lo llamamos paso por referencia
    */
    
    function sumar_uno_ref(&$dato){
        $dato++;
        print "<p>sumar_uno_ref: Ahora dato vale $dato</p>\n";
    }
    
    $dato=8;
    sumar_uno_ref($dato);
    print "<p>principal: Ahora dato vale $dato</p>\n";
    
    // sumar_uno_ref(7);
    
    $otro_dato=2;
    sumar_uno_ref($otro_dato);
    print "<p>principal: Ahora dato vale $otro_dato</p>\n";
    
    // sumar_uno_ref($dato+7);

    /*
    En algunos lenguajes hay lo que llamamos sobrecarga. Funciones con el mismo nombre y distintos argumentos. En PHP no tiene sentido porque no hay tipos.
    Lo que sí tenemos son argumentos opcionales
    */
    function saludar_opcional($mensaje="Hola",$color='navy'){
        print "<p style=\"color:$color\">$mensaje</p>\n";
    }
    
    saludar_opcional("Muy buenas",'#00FF00');
    
    /*
    Podemos dar un valor por defecto de atrás hacia adelante.
    Si sólo damos un parámetro se entiende que es el primero
    Si damo dos, primero y segundo y así sucesivamente.
    Mira la función mktime con todos los valotes opcionales
    */
    saludar_opcional("Muy buenas");
    
    saludar_opcional();
    
    saludar_opcional('red');
    ?>
    </body>
</html>