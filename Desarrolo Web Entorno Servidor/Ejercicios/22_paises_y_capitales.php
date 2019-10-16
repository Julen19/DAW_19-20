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
    print "<pre>Hola " . $_POST['Nombre']." ".$_POST['Apellido']." Hoy es día ".$_POST['Fecha']."</pre>";
    print "<pre> " .$_POST['Apellido']. "</pre>";
    print "<pre>" .$_POST['Fecha'];

    require_once 'Paises_Capitales.php';
    // print "<pre>\$capital: " . print_r($capital, true) . "</pre>";
    print '<form action="22_procesar_formulario_examen.php" method="POST">';
    print "<pre>Inserte la capital correspondiente a el pais indicado: </pre>";
    $cap_aleatoria = array_rand($capital);
    print "<pre>Pais: " .$cap_aleatoria."</pre>";
    asort($capital);
    print "<select>";
    foreach ($capital as $clave => $valor) {
        print "<option name=\"valor\">" . $valor. "</option>";
    }
    print "</select>\n\n";

    print '<input type="submit" value="Enviar Consulta">';
    print '</form>';

    ?>
</body>

</html>