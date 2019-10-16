
var nota1;
var nota2;
var nota3;
var nota4;
var nota5;

for (var i = 0; i < 5; i++) {

    var prov = parseInt(prompt(`Introduce la ${i + 1} nota`));

    switch (true) {
        case (i == 0):
            nota1 = prov
            if (nota1>=7) {
                document.write(`<br> Esta nota mas alta que 7 => ${nota1}`);
            } else {
                
            }
            break;
        case (i == 1):
            nota2 = prov
            if (nota2>=7) {
                document.write(`<br>Esta nota mas alta que 7 =>  ${nota2}`);
            } else {
                
            }
            break;
        case (i == 2):
            nota3 = prov
            if (nota3>=7) {
                document.write(`<br> Esta nota mas alta que 7 => ${nota3}`);
            } else {
                
            }
            break;
        case (i == 3):
            nota4 = prov
            if (nota4>=7) {
                document.write(`<br> Esta nota mas alta que 7 => ${nota4}`);
            } else {
                
            }
            break;
        case (i == 4):
            nota5 = prov
            if (nota5>=7) {
                document.write(`<br> Esta nota mas alta que 7 =>${nota5}`);
            } else {
                
            }
            break;
        default:
            break;
    }
}

var media = (nota1+nota2+nota3+nota4+nota5)/5;
document.write(`<br>esta es la media ${media}<br>`);
var mediaAlta = [nota1,nota2,nota3,nota4,nota5];
var max=Math.max.apply(null, mediaAlta);
var min=Math.min.apply(null, mediaAlta);
document.write(`Esta es la nota mas alta: ${max}<br>`);
document.write(`Esta es la nota mas alta: ${min}`);
