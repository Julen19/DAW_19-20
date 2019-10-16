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
    $prov[2] = 'Albacete';
    $prov[3] = 'Alicante/Alacant';
    $prov[4] = 'Almería';
    $prov[1] = 'Araba/Álava';
    $prov[33] = 'Asturias';
    $prov[5] = 'Ávila';
    $prov[6] = 'Badajoz';
    $prov[7] = 'Balears, Illes';
    $prov[8] = 'Barcelona';
    $prov[48] = 'Bizkaia';
    $prov[9] = 'Burgos';
    $prov[10] = 'Cáceres';
    $prov[11] = 'Cádiz';
    $prov[39] = 'Cantabria';
    $prov[12] = 'Castellón/Castelló';
    $prov[13] = 'Ciudad Real';
    $prov[14] = 'Córdoba';
    $prov[15] = 'Coruña, A';
    $prov[16] = 'Cuenca';
    $prov[20] = 'Gipuzkoa';
    $prov[17] = 'Girona';
    $prov[18] = 'Granada';
    $prov[19] = 'Guadalajara';
    $prov[21] = 'Huelva';
    $prov[22] = 'Huesca';
    $prov[23] = 'Jaén';
    $prov[24] = 'León';
    $prov[25] = 'Lleida';
    $prov[27] = 'Lugo';
    $prov[28] = 'Madrid';
    $prov[29] = 'Málaga';
    $prov[30] = 'Murcia';
    $prov[31] = 'Navarra';
    $prov[32] = 'Ourense';
    $prov[34] = 'Palencia';
    $prov[35] = 'Palmas, Las';
    $prov[36] = 'Pontevedra';
    $prov[26] = 'Rioja, La';
    $prov[37] = 'Salamanca';
    $prov[38] = 'Santa Cruz de Tenerife';
    $prov[40] = 'Segovia';
    $prov[41] = 'Sevilla';
    $prov[42] = 'Soria';
    $prov[43] = 'Tarragona';
    $prov[44] = 'Teruel';
    $prov[45] = 'Toledo';
    $prov[46] = 'Valencia/València';
    $prov[47] = 'Valladolid';
    $prov[49] = 'Zamora';
    $prov[50] = 'Zaragoza';
    $prov[51] = 'Ceuta';
    $prov[52] = 'Melilla';

    print "<p>Array recorrido con for</p>\n";
    for($i=0;$i<count($prov);$i++){
        print "<p>\$prov[$i]=$prov[$i]</p>\n";
    }

    ?>
</body>

</html>