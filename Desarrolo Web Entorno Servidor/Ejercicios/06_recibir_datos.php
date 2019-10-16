php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recibir Datos.php</title>
</head>
<body>
    <?php
   
    error_reporting(E_ALL);
    ?>
    <?php
     print "<pre>\$_POST:\n".print_r($_POST,true);
     print "<pre>\$_GET:\n".print_r($_GET,true);
    print "<pre>\$_GET[comida]:\n".print_r($_GET["comida"],true);
     print "<pre>\$_REQUEST:\n".print_r($_REQUEST,true);
    ?>
   
</body>
</html>