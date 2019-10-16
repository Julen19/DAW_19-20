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
	print "<p>Locale activo:</p>\n";
	//Sirve para devolver el locale actual
	//print lo muestra en pantalla
	print setlocale(LC_ALL,'0'); 
	$cadena='aeiou';
	print "<p>"."strtoupper('$cadena')".strtoupper($cadena)."</p>\n";
	/* Cambio a castellano en utf-8*/
	print'<br>';
	setlocale(LC_ALL,'es_ES.utf8','es-ES.utf8');
	print setlocale(LC_ALL,'0');
	$cadena='cañón';
	print "<p>"."strtoupper('$cadena')".mb_strtoupper($cadena)."</p>\n";
	?>
		</body>
</html>