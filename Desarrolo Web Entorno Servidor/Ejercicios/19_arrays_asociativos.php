<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <title>Arrays asociativos</title>
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
    Un array asociativo es una colección ordenada de parejas. El primer miembro de la pareja es la "clave" y puede ser un número o una cadena. El segundo miembro es el dato. Puede ser un tipo mucho más complejo.
    Si el dato es un array, hablamos de array doble.
    De nuevo, lo más cómodo es definirlo directamente
    */

    $alumno['nombre'] = "Luisito";
    $alumno['apellidos'] = "Luisitez Luisitagoitia";
    $alumno['edad'] = 22;
    // $alumno['aficiones']=array('correr','saltar','bailar');

    print "<pre>\$alumno: " . print_r($alumno, true) . "<pre>\n";

    print "<p>Saludos $alumno[nombre] $alumno[apellidos]. Tienes $alumno[edad] años.</p>\n";
    print "<p>Saludos " . $alumno['nombre'] . " " . $alumno['apellidos'] . ". Tienes $alumno[edad] años.</p>\n";


    $otro = array(
        'nombre' => 'pepito',
        'apellidos' => 'pepitez',
        'edad' => '25'
    );
    print "<pre>\$otro: " . print_r($otro, true) . "<pre>\n";

    // podemos recorrer un array asociativo de dos maneras

    foreach($alumno as $tipodato => $dato){
        print "<p>\$alumno de[$tipodato]=$dato</p>\n";
    }


    // Si solo nos interesa el dato podemos recorrer el array sin calves
    
    foreach($alumno as $dato){
        print "<p>$dato</p>\n";
    }

    // En php hay muchas funciones de array  
    // Dos de ellas nos "Separan" las claves y los valores

    $claves=array_keys($alumno);
    $valores=array_values($alumno);

    print"<p>\$claves:" .print_r($claves,true)."</p>";
    print"<p>\$valores:".print_r($valores,true)."</p>";


    
    ?>

</body>

</html>