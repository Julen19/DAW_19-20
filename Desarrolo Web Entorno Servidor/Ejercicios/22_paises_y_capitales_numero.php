<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Examen antiguo sobre capitales</title>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> 
</head>
<body>
<?php
/*
Hacemos el sorteo de país.
El menor índice posible es 0
El mayor count($capital)-1
*/
require_once 'datos/paises_y_capitales.php'; 
$rifa=rand(0,count($capital)-1);
/*
Sería posible comenzar en 1
$rifa=rand(1,count($capital))
*/
// print "<p>Ha salido el $rifa</p>\n";
$solo_paises=array_keys($capital);
print "<p>¿Cuál es la capital de $solo_paises[$rifa]?</p>\n";
/*
Para hacer el desplegable necesito las capitales
*/
$solo_capitales=array_values($capital);
//TRAMPA PARA PRUEBAS
// print "<p>Deberías elegir $solo_capitales[$rifa]</p>\n";

asort($solo_capitales);
// print "<pre>".print_r($solo_capitales,true)."</pre>\n";
print "<form action=\"22_comprobar_capital_numero.php\" method=\"GET\">";
print "<select name=\"capital\">\n";
/*
for($i=0;$i<count($capital);$i++){
    print "<option value=\"$i\">$solo_capitales[$i]</option>\n";
}
*/
foreach($solo_capitales as $codigo => $ciudad){
    print "<option value=\"$codigo\">$ciudad</option>\n";
}
print "</select>\n";
print "<input type=\"hidden\" name=\"pais\" value=\"$rifa\">\n";
print "<input type=\"submit\" value=\"Comprobar Capital\">\n";
print "</form>\n";
?>
</body>
</html>
<!-- PON AQUI TUS DATOS
    NOMBRE:  
    APELLIDOS:      
    FECHA: 
-->
<!-- 
 La primera se llamará 00_formulario_examen.php y la segunda 00_procesar_formulario_examen.php
Cuando acabes los subes a tu carpeta del servidor.

Queremos animar a unos niños a que se aprendan las capitales de Europa. Para ello disponemos de un array 
asociativo con paises y capitales. Creamos un pequeño formulario que hará lo siguiente:

Elegimos al azar un pais y le presentamos el nombre y un desplegable con todas las capitales.

PISTA: Busca en la referencia las funciones array_keys y array_values para poder obtener dos arrays de claves
 numéricas a partir del array asociativo. Si prefieres puedes hacerlo directamente con el array que se te da.
PISTA: Para generar un número aleatorio puedes usar la función rand

El formulario envía los datos de la siguiente manera: 
Hay un campo input oculto llamado país que contiene el número del país que ha salido: 0 si es Albania, 
1 si es Alemania...
La lista desplegable envía el número de la opción elegida: 0 si es Tirana, 1 Berlin...
Los datos se envian con un POST, que los chicos son listos y se van a dar cuente de que mandando dos números 
iguales aciertan siempre. Para pruebas, lo puedes mandar con GET, pero al final debe ser POST

En el documento que recibe los datos pueden aparecer dos cosas. 
Si la respuesta es correcta se escribe: "Muy bien, la capital de ... es ..."
Si es incorrecta se escribe "Lo siento, has fallado. La capital de ... es ... " y se muestra la tabla de capitales.

HAZ UNA SEGUNDA VERSIÓN QUE EN VEZ DE CÓDIGOS MANDE CADENAS

PISTA: El array está en los dos ficheros. Si te resulta complicado escribir los mensajes de acierto o error,
 empieza por poner "has acertado" y "has fallado" y déjalo para el final, pero no dejes la tabla sin hacer.
 
        $capital=array(
        'Albania' => 'Tirana',
        'Alemania' => 'Berlin',
        'Andorra' => 'Andorra la Vella',
        'Armenia' => 'Erevan',
        'Austria' => 'Viena',
        'Azerbaiyan' => 'Baku',
        'Belgica' => 'Bruselas',
        'Bielorrusia' => 'Minsk',
        'Bosnia-Herzegovina' => 'Sarajevo',
        'Bulgaria' => 'Sofia',
        'Chipre' => 'Nicosia',
        'Croacia' => 'Zagreb',
        'Dinamarca' => 'Copenhague',
        'Eslovaquia' => 'Bratislava',
        'Eslovenia' => 'Liubliana',
        'España' => 'Madrid',
        'Estonia' => 'Tallin',
        'Finlandia' => 'Helsinki',
        'Francia' => 'Paris',
        'Georgia' => 'Tiflis',
        'Grecia' => 'Atenas',
        'Holanda' => 'Amsterdam',
        'Hungría' => 'Budapest',
        'Irlanda (Eire)' => 'Dublin',
        'Islandia' => 'Reykjavik',
        'Italia' => 'Roma',
        'Kazajstan' => 'Almaty',
        'Kirguizistan' => 'Bishkek',
        'Letonia' => 'Riga',
        'Liechtenstein' => 'Vaduz',
        'Lituania' => 'Vilna',
        'Luxemburgo' => 'Luxemburgo',
        'Macedonia' => 'Skopje',
        'Malta' => 'La Valletta',
        'Moldova' => 'Chisinau',
        'Mónaco' => 'Monaco',
        'Montenegro' => 'Podgorica',
        'Noruega' => 'Oslo',
        'Polonia' => 'Varsovia',
        'Portugal' => 'Lisboa',
        'Reino Unido' => 'Londres',
        'República Checa' => 'Praga',
        'Rumania' => 'Bucarest',
        'Rusia' => 'Moscu',
        'San Marino' => 'San Marino',
        'Santa Sede' => 'Vaticano',
        'Serbia' => 'Belgrado',
        'Suecia' => 'Estocolmo',
        'Suiza' => 'Berna',
        'Tayikistan' => 'Dushanbe',
        'Turkmenistan' => 'Ashgabat',
        'Ucrania' => 'Kiev',
        'Uzbekistan' => 'Tashkent'
        );
        
 
-->