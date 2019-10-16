
 for(var cont =1; cont<=3;cont++){

    if(cont == 1){
        var num1 = prompt("Introduzca un numero");
    }
    else if(cont == 2){
        var num2 = prompt("Introduzca un numero");
    }
    else{
        var num3 = prompt("Introduzca un numero");
    }
 }

document.write(num1+", "+num2+", "+num3+"<br>");
// document.write(`${num1}, ${num2}, ${num3} <br>`);

if(num1>num2){
    if(num1>num3){
        document.write(`<h1>${num1}</h1>`);
    }
  
}
else if(num2>num3){
    document.write(`<h1>${num2}</h1>`);
}
else{
    document.write(`<h1>${num3}</h1>`)
}






