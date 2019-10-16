
var y;
var a;
function calcular_perimetro() {
    y = true;
    while (y) {
        a = parseInt(prompt("Inserte un numero"));
        var x = parseInt(a * 4);

        alert(`El area de su cuadrado es: ${x}`);

        y = confirm("Desea reiniciar el programa?");
    }

}
