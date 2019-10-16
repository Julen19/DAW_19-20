var a;
var b;
var x;


function calcular_area_cuadrado() {
    a = parseInt(prompt("Introduce el tamaño de uno de los lados del cuadrado"));
    b = Math.pow(a, 2);
    alert(`El area de su cuadrado es: ${y}`);
};

function calcular_area_circulo() {
    a = parseInt(prompt("Introduce el radio de el circulo"));
    b = Math.PI * Math.pow(a, 2);
    alert(`El area de su circulo es es: ${y}`);
};

function calcular_area_triangulo() {
    a = parseInt(prompt("Introduce el tamaño de la base"));
    b = parseInt(prompt("Introduce la altura"));
    y = (a * b) / 2;
    alert(`El area de su cuadrado es: ${y}`);
};


function ejercicio4() {

    var o = true;
    while (o) {
        x = parseInt(prompt(`Introduce un numero entre el 1-4
    1.-Calcular area del cuadrado
    2.-Calcular area del circulo
    3.-Calcular area del triangulo
    4.-Salir
    `));
        switch (x) {
            case 1:
                calcular_area_cuadrado();
                break;
            case 2:
                calcular_area_circulo();

                break;
            case 3:
                calcular_area_triangulo();
                break;
            case 4:

                break;

            default:
                break;
        }
        o = confirm("Desea calcular otro area?");
    }

}