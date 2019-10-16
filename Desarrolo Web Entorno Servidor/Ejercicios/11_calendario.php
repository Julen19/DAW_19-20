<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<!--
Te puede ayudar para comprobar poner en línea de comando en el servidor (PUTTY) 
 ncal -Mb -m 5 2019
-->
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php
    ini_set('display_errors','On');
    error_reporting(E_ALL);
    
    setlocale(LC_ALL,'es_ES.utf8','es-ES-utf8','es-ES.utf8');
    
    $mes=5;
    $anho=2019;

    print "<table class=\"mes\">\n";
    print "<caption>".ucfirst(strftime("%B de %G",strtotime("$anho-$mes")))."</caption>\n";
    /*
    CABECERA CON DIAS DE LA SEMANA
    */
    $un_lunes=strtotime("9/23/2019");
    print "<tr>\n";
    for($i=0;$i<7;$i++){
        print "<th>".strftime("%a",$un_lunes+$i*24*60*60)."</th>\n";
    }
    print "</tr>\n";
    
    $huecos=strftime("%u",strtotime("$anho-$mes-1"))-1;
    // print "<p>\$huecos:$huecos</p>\n";
    $dia=1-$huecos;
    $ultimo=strftime("%e",strtotime("last day of $anho-$mes"));
    // print "<p>\$ultimo=$ultimo</p>\n";
    while($dia<=$ultimo){//Mientras queden días
        //Escribo una semana
        //Solo escribo el dato si es positivo y menor o igual que $ultimo
        print "<tr>\n";
        for($i=0;$i<7;$i++){
            // print "<td>";
            // if(($dia>0)&&($dia<=$ultimo)){ 
                // print $dia;
            // }
            // print "</td>";
            print "<td>".((($dia>0)&&($dia<=$ultimo))?"$dia":"")."<td>\n";
            $dia++;
        }
        print "</tr>\n";
    }
    print "</table>\n";
    /*
    (condición)?"si verdad":"si mentira"
    */
    $h=5;
    $m=0;
    $s=3;
    print "<p>";
    print ($h>0)?" $h horas ":"";
    print ($m>0)?" $m minutos ":"";
    print ($s>0)?" $s segundos ":"";
    print"</p>\n";
    ?>
    </body>
</html>