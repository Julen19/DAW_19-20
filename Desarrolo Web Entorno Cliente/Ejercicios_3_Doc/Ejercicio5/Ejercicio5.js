var a;
var b;
var x;
var y;


function calcular_suma(a, b) {
    y = a + b;
    alert(`La suma de sus numeros es: ${y}`);
};

function calcular_resta(a, b) {
    y = a - b;
    alert(`La resta de sus numeros es: ${y}`);
};

function calcular_multi(a, b) {
    y = a * b;
    alert(`La multiplicacion de sus numeros es: ${y}`);
}
function calcular_div(a, b) {
    y = a / b;
    alert(`La division de sus numeros es: ${y}`);
};


function ejercicio5() {
    a = parseInt(prompt("Introduzca el primer numero"));
    b = parseInt(prompt("Introduzca el segundo numero"));
    var o = true;
    while (o) {
        x = parseInt(prompt(`Introduce un numero entre el 1-4
    1.-Calcular suma
    2.-Calcular resta
    3.-Calcular multiplicacion
    4.-Calcular division
    5.-Salir
    `));
        switch (x) {
            case 1:
                calcular_suma(a, b);
                break;
            case 2:
                calcular_resta(a, b);

                break;
            case 3:
                calcular_multi(a, b);
                break;
            case 4:
                calcular_div(a, b);
                break;
            default:


                break;
        }
        o = confirm("Desea hacer otro calculo con los numero introducidos?");
    }

}