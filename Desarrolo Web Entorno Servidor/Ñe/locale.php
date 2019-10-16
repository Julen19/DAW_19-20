<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>04_locale</title>
</head>
<body>
    <?php
    print setlocale(LC_ALL,'0');
    //Cambio a Castellano utf-8
    setlocale(LC_ALL,'es_ES.UTF-8');
    print setlocale(LC_ALL,'0');
    ?>
</body>
</html>
