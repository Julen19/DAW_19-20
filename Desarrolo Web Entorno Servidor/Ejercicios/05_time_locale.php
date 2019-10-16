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
	print "<p>El locale es: ".setlocale(LC_ALL,'0')."<br>\n";
	print strftime("<p>Hoy es %A</p>");
	setlocale(LC_ALL,'es_ES.utf8','es-ES.utf8','es-ES-utf8','spanish-Spain' );
	print "<p>El locale es: ".setlocale(LC_ALL,'0')."<br>\n";
	print strftime("<p>Hoy es %A</p>");

	//strtotime lo muestra con los segundos que han pasado desde tal fecha
	echo strtotime("now"), "\n";
	echo strtotime("10 September 2000"), "\n";
	/*Formas de escribir fechas y tiempo*/
	print strftime("<p>Hoy es el día %j de 365</p>");
	print strftime("<p>Este mes es: %h</p>");
	print strftime("<p>Este mes es: %B</p>");
	print strftime("<p>Este año es: %G</p>");
	print strftime("<p>Son las: %X horas</p>");
	print strftime("<p>Son las: %c horas</p>");//el de juanjo dice otra cosa
	print strftime("<p>Hoy es: %D horas</p>");
	print strftime("<p>Hoy es: %F horas</p>");
	print strftime("<p>Hoy es: %s horas</p>");//:( hay que hacer una movida
	print strftime("<p>Hoy es: %x horas</p>");
	
	
	//
	$elmiercoles=strtotime('next Wednesday');
	print "<p>El miércoles será $elmiercoles</p>\n";
	print strftime("<p>Hoy es %A día de %e de %B de %G</p>",$elmiercoles);
		//esta es la movida
	print strftime("<p>Hoy es %A día de %e de %B de %G</p>",strtotime('last tuesday'));
	print strftime("<p>Otro día será %A</p>",$elmiercoles);
	
	
	/*
		Lo sorprendente es la gran cantidad de expresiones similares
		al lenguaje natural (guiris) con las que podemos alimentar la 
		función strtotime
	*/
	
	$fecha="last monday";
	print strftime("<p><strong>'$fecha' </strong> &rarr; %A día de %e de %B de %G %X</p>",strtotime($fecha));
	
	
	/*PRUEBAS FECHAS Y HORAS*/
	$test=new DateTime('now');
	print $test->format('Y-m-d H:i')."<p>-------------------------</p>\n";
	print $test->format('Y-m-d\TH:i:s.u')."<p>-------------------------</p>\n";
	print $test->format('?')."<p>-------------------------</p>\n";
	print $test->format('Whitespace and Separators')."<p>-------------------------</p>\n";
	print $test->format('Whitespace and Separators')."<p>-------------------------</p>\n";
	print $test->format('Whitespace and Separators')."<p>-------------------------</p>\n";
	print $test->format('Whitespace and Separators')."<p>-------------------------</p>\n";
	
	$time = time();
	print date("d-m-Y (H:i:s)",$time);
	
	
	
	?>
	
	<!--
	GET  -- (ejemplo weather)
	POST -- provocar cambio en servidor (ejemplo de la votación)
	-->
	<form  action="06_recibir_datos.php" method="GET">
	<label>Nombre: </label>
	<input type="text" name="nombre"><br>
	<input type="text" name="nombre"><br>
	
	</form>
	
	
	</body>
	</html>