<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<!--
Usa los arrays $cuentas y $alumnos para generar una lista ordenada de alumnos que sean enlaces a si "sitio" web.
Por ejemplo, el primero de la lista es 'Alejandro Antonio Di Maggio Patino'. Al hacer click en su nombre nos lleva a 10.22.23.71/~dw2t_alejandro.

Repite el ejercicio con el array $usuario
--><html>
    <head>
        <title>Listado de alumnos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php
    ini_set('display_errors','On');
    error_reporting(E_ALL);
    ?>
    <?php
    require_once 'datos/lista.php';
    /*
    print "<ol>\n";
    for($i=0;$i<count($alumnos);$i++){
        print "<li><a href=\"/~$cuentas[$i]\">$alumnos[$i]</a></li>\n";
    }
    print "</ol>\n";
    */
    
    /*
    Los dos arrays están "conectados" pero el orden no es correcto
    Supongamos que los quiero ordenar por cuenta
    */
    setlocale(LC_ALL,'es_ES.utf8','es-ES-utf8','es-ES.utf8');
    // print "<pre>\$cuentas: ".print_r($cuentas,true)."</pre>\n";
    /*
    asort($cuentas,SORT_LOCALE_STRING);
    print "<pre>\$cuentas: ".print_r($cuentas,true)."</pre>\n";
    print "<ol>\n";
    foreach($cuentas as $i => $la_cuenta){
        print "<li><a href=\"/~$la_cuenta\">$alumnos[$i]</a></li>\n";
    }
    print "</ol>\n";
    */
    
    /*
    Ahora quiero ordenar por alumno
    */
    // print "<pre>\$alumnos: ".print_r($alumnos,true)."</pre>\n";
    // asort($alumnos,SORT_LOCALE_STRING);
    // print "<pre>\$alumnos: ".print_r($alumnos,true)."</pre>\n";
    /*
    print "<ol>\n";
    foreach($alumnos as $i => $el_alumno){
        print "<li><a href=\"/~$cuentas[$i]\">$el_alumno</a></li>\n";
    }
    print "</ol>\n";
    */
    
    /*
    No tengo un array doble pero lo genero "on the fly"
    Se va a llamar $aux
    */
    
    for($i=0;$i<count($alumnos);$i++){
        $aux[$cuentas[$i]]=$alumnos[$i];
    }
    print "<pre>\$aux: ".print_r($aux,true)."</pre>\n";
    /*
    NOTA_ LO QUE VAMOS A HACER CON AUX SE HARÍA CON $usuarios
    */
    
    /*
    Lo queremos ordenar por cuenta
    ksort($aux,SORT_LOCALE_STRING);
    print "<pre>\$aux: ".print_r($aux,true)."</pre>\n";
    */
    /*
    Si lo queremos ordenar por alumno, ponemos
    asort($aux,SORT_LOCALE_STRING);
    print "<ol>\n";
    foreach($aux as $la_cuenta => $el_usuario){
        print "<li><a href=\"/~$la_cuenta\">$el_usuario</a></li>\n";
    }
    print "</ol>\n";
    */

    
    /*
    Quiero usar el array $usuario de claves las cuentas y valores el nombre de los usuarios para generar otro array más complejo
    
    Primro ordeno el array
    */
    asort($usuario,SORT_LOCALE_STRING);
    // ksort($usuario,SORT_LOCALE_STRING);
    
    foreach($usuario as $la_cuenta => $el_alumno){
        $usebio[]=array(
                        'cuenta'=>$la_cuenta,
                        'alumno'=>$el_alumno
                        );
    }
    print "<pre>\$usebio: ".print_r($usebio,true)."</pre>\n";
    print "<pre>\n";
    print json_encode($usebio,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    print "</pre>\n";
    ?>
    </body>
</html>
