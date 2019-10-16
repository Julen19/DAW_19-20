<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Arrays en PHP</title>
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
    Un array en PHP se puede inicializar directamente con la palabra clave array
    */
    $frutas=array('pera','manzana','plátano');
    
    print "<pre>\$frutas: ".print_r($frutas,true)."<pre>\n";
    
    /*
    Otra forma de definir un array es simplemente dando valor a sus elementos
    */
    $postre[0]="Helado";
    $postre[1]="Tiramisú";
    
    print "<pre>\$postre: ".print_r($postre,true)."<pre>\n";
    
    /*
    Si omito el índice, se pone solo
    */
    
    $postre[]="Melón";
    
    print "<pre>\$postre: ".print_r($postre,true)."<pre>\n";
    
    
    $postre[5]="Tarta";
    
    print "<pre>\$postre: ".print_r($postre,true)."<pre>\n";
    
    $postre[]="Natillas";
    
    print "<pre>\$postre: ".print_r($postre,true)."<pre>\n";
    
    $postre[4]="Cuajada";
    
    print "<pre>\$postre: ".print_r($postre,true)."<pre>\n";
    
    /*
    Si tenemos un array "bien hecho" lo podemos recorrer con un bucle for
    */
    
    for($i=0;$i<count($frutas);$i++){
        print "<p>\$frutas[$i]=$frutas[$i]</p>\n";
    }
    
    /*
    Si el array no está bien hecho, el bucle falla
    */
    print "<p>Array recorrido con for</p>\n";
    for($i=0;$i<count($postre);$i++){
        print "<p>\$postre[$i]=$postre[$i]</p>\n";
    }
    
    /*
    La alternativa es usar un buble foreach
    */
    
    print "<p>Array recorrido con foreach</p>\n";
    foreach($postre as $clave => $valor){
        print "<p>\$postre[$clave]=$valor</p>\n";
        $clave=0;
        $valor="Patatas";
    }
    
    /*
    Se podría pensar que a través de $clave y $valor se accede al array.
    El bucle anterior escribe y luego modifica el valor
    */
    
    print "<p>Array presuntamente modificado recorrido con foreach</p>\n";
    foreach($postre as $clave => $valor){
        print "<p>\$postre[$clave]=$valor</p>\n";
    }
    
    /*
    Podemos modificar los datos del array operando con array[clave]
    */
    
    /*
    foreach($postre as $clave => $valor){
        $postre[$clave]='Patatas';
    }
    */
    
    /* O bien usando referencias */
    
    foreach($postre as $clave => &$valor){
        $valor='Patatas';
    }
    
    print "<p>Array presuntamente modificado recorrido con foreach</p>\n";
    foreach($postre as $clave => $valor){
        print "<p>\$postre[$clave]=$valor</p>\n";
    }
    ?>
    </body>
</html>