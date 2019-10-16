var nota1 = 0;
var nota2 = 0;
var nota3 = 0;
var promedio = 0;

for (var i = 0; i < 3; i++) {

   var notaintr =  parseInt(prompt(`Introduce la ${i+1} nota: `));
    

    if (i == 0) {
        nota1 = notaintr;
    }
    else if (i == 1) {
        nota2 = notaintr;

    } else {
        nota3 = notaintr;

    }


}
promedio = (nota1 + nota2 + nota3) /3 ;
document.write(`<br> ${promedio}`);
switch (true) {
    case (promedio >= 7):
        document.write(`<br> Promocionado`);
        break;
    case (4 <= promedio < 7):
        document.write(`<br> Regular`);
        break;
    case (promedio < 4):
        document.write(`<br> Suspenso`);

        break;
    default:
        break;
}

