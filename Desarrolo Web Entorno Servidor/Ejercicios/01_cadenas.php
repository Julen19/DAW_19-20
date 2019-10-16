<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<p>El alumno se llama Pepito</p><p>El alumno se llama Luisito</p><p>Salto de línea 
 y tabulador 	 con comilla doble </p><p>Salto de línea \n y tabulador \t con comilla simple </p><p>El caracter ' es una comilla simple</p><p>El caracter ' es una comilla simple</p><p>Salto de linea 
 conseguido con \n <p>
<p>Saludos Pepito</p>
\n<p>Saludos $alumno</p>\n<br />
<b>Notice</b>:  Undefined variable: apellido in <b>/home/juanjo/public_html/00_segundo/01_cadenas.php</b> on line <b>49</b><br />
<p>Bienvenido de nuevo Pepito </p>
	<!-- Ejemplo de formulario -->
	<form action="ejemplo.com" method="GET">
	Nombre:<input type="text" name="nombre" value="Pepito"><br>
	<!--Tomando Pepito de $alumno -->
	Apellido:<input type="text" name="apellido">
	</form>
		
	<form action="ejemplo.com" method="GET">
	Nombre:<input type="text" name="nombre" value="Pepito"><br>
	<!--Tomando Pepito de Pepito -->
	Apellido:<input type="text" name="apellido">
	</form>
		</body>
</html>