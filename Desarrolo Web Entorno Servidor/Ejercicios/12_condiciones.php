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
    // error_reporting(E_ALL);
    ?>
    <?php
    /*
    PHP es un lenguaje "débilmente tipado"
    */
    
    if($valor){
        print "<p>\$valor es CIERTO</p>\n";
    }else{
        print "<p>\$valor es FALSO</p>\n";
    }
    
    /*
    Una cadena vacía es falsa.
    Viene muy bien si estamos validando
    Se supone que nombre existe pero está vacío
    */
    
    $_GET['nombre']="";
    
    if(!$_GET['nombre']){
        print "<p>has olvidado el nombre</p>\n";
    }
    
    /*
    Una cadena no vacía es cierta casi siempre
    */
    
    $valor="ELEFANTE";
    if($valor){
        print "<p>\"$valor\" es cierto</p>\n";
    }else{
        print "<p>\"$valor\" es falso</p>\n";
    }
    
    $valor="FALSE";
    if($valor){
        print "<p>\"$valor\" es cierto</p>\n";
    }else{
        print "<p>\"$valor\" es falso</p>\n";
    }
    
    $valor="0";
    if($valor){
        print "<p>\"$valor\" es cierto</p>\n";
    }else{
        print "<p>\"$valor\" es falso</p>\n";
    }
    
    $valor=5;
    if($valor){
        print "<p>\"$valor\" es cierto</p>\n";
    }else{
        print "<p>\"$valor\" es falso</p>\n";
    }
    
    /*
    Hay otro tipo de campos que simplemente aparecen o no al recoger datos
    
    <input type="text" name="nombre">
    
    Si no escribo nada, $_GET['nombre'] está vacío.
    
    <input type="checkbox" name="correo">
    
    Si no selecciono la casilla, $_GET['correo'] no existe.
    */
    
    
    if(isset($_GET['basura'])){
        print "<p>Quieres recibir correo basura</p>\n";
    }else{
        print "<p>NO Quieres recibir correo basura</p>\n";
    }   
    /*
    Botones de radio 
    <input type="radio" name="sexo" value="H">Hombre
    <input type="radio" name="sexo" value="M">Mujer
    */
    /* Se suele usar este chequeo */
    if(isset($_GET['sex'])&& $_GET['sex']=='H'){
        print "<p>Has marcado hombre</p>\n";
    }
    
    /*
    Comparaciones y conversiones de tipo
    */
    $izquierda=5;
    $derecha="5 elefantes";
    if($izquierda==$derecha){
        print "<p>Son iguales</p>\n";
    }
    if($izquierda===$derecha){
        print "<p>Son idénticos</p>\n";
    }
    
    $izquierda=5;
    $derecha="5";
    
    if($izquierda!=$derecha){
        print "<p>Son distintos</p>\n";
    }
    if($izquierda!==$derecha){
        print "<p>No son equivalentes</p>\n";
    }
    $derecha="5 &euro;";
    print "<p> $izquierda * $derecha =".($izquierda * $derecha)."</p>";
    
    /*
    Vamos a manejar funciones que a veces devuelven un número y a veces false.
    Si evaluamos con !$retorno rtenemos un falso positivo en el caso de que retorno valga 0. La razón es que 0 es falso.
    */
    
    // $retorno=0;
    $retorno=false;
    if($retorno==false){
        print "<p>La función parece que ha devuelto falso (y el cero podría engañarme)</p>\n";
    }
    if(!$retorno){
        print "<p>La función parece que ha devuelto falso (y el cero podría engañarme)</p>\n";
    }
    if($retorno===false){
        print "<p>La función ha devuelto falso (y el cero no me engaña)</p>\n";
    }
    
    ?>
    
    </body>
</html>