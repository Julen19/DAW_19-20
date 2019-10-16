var salario = parseInt(prompt("Introduzca su Salario"));
var antiguedad = parseInt(prompt("Introduzca su Antiguedad"));

switch (true) {
    case (salario < 500 && antiguedad >= 10):
        salario = salario + (salario * 0.2);
        document.write(`Salario a pagar ${salario}`);
        break;
    case (salario < 500 && antiguedad < 10):
        salario =  salario + (salario * 0.05) ;
        document.write(`Salario a pagar ${salario}`);
        break;
    case (salario >= 500):
        document.write(`Salario a pagar ${salario}`);
        break;

    default:
        break;
}