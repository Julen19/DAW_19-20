
var a;
var b;
var c;

function pedir_num() {

    a = parseInt(prompt("Introduce 1 numero"));
    b = parseInt(prompt("Introduce 2 numero"));
    c = parseInt(prompt("Introduce 3 numero"));
}



function ordenar_numeros(a, b, c) {
    switch (true) {
        case (a >= b && a >= c):
            if (b > c) {
                document.write(`Este es el orden de mayor 
                a menor ${a},${b},${c}`);




            } else {
                document.write(`Este es el orden de mayor 
                a menor ${a},${c},${b}`);

            }
            break;
        case (b >= a && b >= c):
            if (a > c) {
                document.write(`Este es el orden de mayor 
                a menor ${b},${a},${c}`);


            } else {
                document.write(`Este es el orden de mayor 
                a menor ${b},${c},${a}`);

            }
            break;
        case (c >= b && c >= a):
            if (b > a) {
                document.write(`Este es el orden de mayor 
                a menor ${c} ${b} 12${a}`);


            } else {
                document.write(`Este es el orden de mayor 
                a menor ${c},${a},${b}`);

            }
            break;
        default:
            break;
    }

}