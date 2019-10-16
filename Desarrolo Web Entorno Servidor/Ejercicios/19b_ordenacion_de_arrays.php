<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    ?>
    <?php
	setlocale(LC_ALL,'es_ES.utf8','es-ES.utf8','es-ES-utf8','spanish-Spain' );
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    require_once'provincias.php';
    require_once'lista.php';
    // print "<pre>\$prov: ".print_r($prov,true)."</pre>\n";
    // print "<pre>\$cuentas: ".print_r($cuentas,true)."</pre>\n";
    // print "<pre>\$alumnos: ".print_r($alumnos,true)."</pre>\n";
    // print "<pre>\$usuario: ".print_r($usuario,true)."</pre>\n";
    // print "<pre>\$clase: ".print_r($clase,true)."</pre>\n";

    // sort($cuentas);

    // // si solo nos interesan los datos podemos ordenar con sort.
    // // Ordenara y pondrA claves del 0 en adelante. Perderemos las calves que teniamos
    // sort($prov,SORT_LOCALE_STRING);

    // print "<pre>Array ordenado: ".print_r($prov,true)."</pre>\n";
    // sort($usuario,SORT_LOCALE_STRING);
    // print "<pre>\$usuario: ".print_r($usuario,true)."</pre>\n";

    // Mantiene las asociaciones clave valor pero nos esta ordenando por clave.
    // ksort($prov,SORT_LOCALE_STRING);
    // ksort($prov);
    // print "<pre>\$prov: ".print_r($prov,true)."</pre>\n";
    // ksort($prov,SORT_NUMERIC);
    // print "<pre>\$prov: ".print_r($prov,true)."</pre>\n";


    // Podemos intentar con asort
    asort($prov);
    print "<pre>\$prov: ".print_r($prov,true)."</pre>\n";



    ?>
</body>

</html>