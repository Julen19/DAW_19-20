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
    print "<ul>\n";
    for ($i = 0; $i < 10; $i++) {

        // print "<li>".($i)."</li>\n";
        print "<li>".(2 * $i)."</li>\n";
    }
    print "</ul>\n";
    ?>
</body>

</html>