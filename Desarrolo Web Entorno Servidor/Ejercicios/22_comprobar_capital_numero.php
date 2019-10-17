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
    require_once '22_paises_y_capitales_numero.php'; 

    // print "<pre>".print_r($_GET,true)."</pre>\n";
    if($_GET['pais']==$_GET['capital']){
        $pais=array_keys($capital)[$_GET['pais']];
        print "<p>Muy bien!!! La capital de $pais es $capital[$pais]</p>\n";
    }else{
        print "<p>Muy Mal</p>\n";
        $pais_preguntado=array_keys($capital)[$_GET['pais']];
        $capital_seleccionada=array_values($capital)[$_GET['capital']];
        // $capital_correcta=$capital[$pais_preguntado];
        $capital_correcta=array_values($capital)[$_GET['pais']];
        $pais_no_preguntado=array_keys($capital)[$_GET['capital']];;
        print "<p>La capital de $pais_preguntado no es $capital_seleccionada sino $capital_correcta</p>\n";
        print "<p>$capital_seleccionada es la capital de $pais_no_preguntado</p>\n";
    }
    ?>
    </body>
</html>