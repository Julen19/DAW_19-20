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
	setlocale(LC_ALL, 'es_ES.utf8', 'es-ES.utf8', 'es-ES-utf8', 'spanish-Spain');
	?>


	<?php
	print "<pre>\$GET" . print_r($_GET, true) . "</pre>";
	print "<pre>\$POST" . print_r($_POST, true) . "</pre>";
	print "<pre>\$REQUEST" . print_r($_REQUEST, true) . "</pre>";


	$cumple = $_GET['cumple'];
	print strftime("<p>Tu cumpleaños es el %A día %e de %B de %G</p>", strtotime($cumple));

	$tu_mes = strftime("%m", strtotime($cumple));
	$este_mes = strftime("%m");
	print "<p>Naciste en el mes $tu_mes y estamos en $este_mes</p>";
	$cumplido = "";
	if ($este_mes > $tu_mes) {
		//este año has cumplido
		$cumplido = true;
	} elseif ($este_mes == $tu_mes) {
		//mirar el dia
		$tu_dia = strftime("%e", strtotime($cumple));
		$este_dia = strftime("%e");
		if ($tu_dia <= $este_dia) {

			$cumplido = true;
			//este año has cumplido
		} else {
			$cumplido = false;
			print "<p>Naciste en el dia $tu_dia y estamos a $este_dia</p>";
		}
	} else {
		//todavia no has cumplido
		$cumplido = false;
	}
	$tu_anio = strftime("%G", strtotime($cumple));
	$este_anio = strftime("%G");
	print "<p>Naciste en el año $tu_anio y estamos en $este_anio</p>";
	$edad = $este_anio - $tu_anio;
	if (!$cumplido) {
		$edad--;
	}

	print "<p>Tienes $edad años</p>";



	switch (true) {
		case (0< $edad && 17 <= $edad):
			echo "eres menor de edad";
			break;
		case (18 <= $edad && $edad < 25):
			echo "puedes sacar el anual abono joven";
			break;
		case (25 < $edad):
			echo "Solo puedes sacar el bono mensual";
			break;
	}
	?>
</body>

</html>