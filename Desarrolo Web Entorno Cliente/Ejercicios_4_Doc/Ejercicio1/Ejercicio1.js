function operaciones(num) {
    document.write(`Este es el numero dado ${num}<br>`);

    num = Math.ceil(num);
    document.write(`Numero entero ${num}<br>`);
    num = Math.trunc(num);
    document.write(`Numero truncado ${num}<br>`);

    var arrnum = [];
    for (var i = 0; i < 2; i++) {
        arrnum[i] = parseInt(prompt("introduce un numero: "));
    }
    num = Math.max(arrnum);
    document.write(`El numero mas alto es ${num}<br>`);

    var arrnum2 = [];
    for (var i = 0; i < 3; i++) {
        arrnum2[i] = parseInt(prompt("introduce un numero: "));
    }
    num = Math.min(arrnum2);
    document.write(`El numero mas alto es ${num}<br>`);

    num = parseInt(prompt("Introduce un numero para calcular su raiz cuadrada: "));
    num = Math.pow(num, 2);
    document.write(`La raiz cuadrada es ${num}<br>`);


    num = Math.random();
    document.write(`La raiz cuadrada es ${num}<br>`);

}