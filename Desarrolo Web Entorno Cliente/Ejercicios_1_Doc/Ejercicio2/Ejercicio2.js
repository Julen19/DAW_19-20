for(var cont =1; cont<=3;cont++){

    if(cont == 1){
        var Nombre = prompt("Introduzca su Nombre");
    }
    else if(cont == 2){
        var Apellido1 = prompt("Introduzca su 1 Apellido");
    }
    else{
        var Apellido2 = prompt("Introduzca su 2 Apellido");
    }
 }

 document.write("<ul>"+
     "<li>Nombre: "+ Nombre+"</li><br>"
 +"<li>Primer Apellido: "+Apellido1+"</li><br>"
 +"<li>Segundo Apellido: "+Apellido2+"</li></ul><br>"
 +`${Nombre} ${Apellido1} ${Apellido2}`);


