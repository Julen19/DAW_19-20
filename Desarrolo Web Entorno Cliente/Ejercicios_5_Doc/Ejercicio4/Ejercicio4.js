var array_pisos = [];

function piso(metroscuadrados, altura, numhab, precio) {

    this.metroscuadrados = metroscuadrados;
    this.altura = altura;
    this.numhab = numhab;
    this.precio = precio;
    this.imprimir = imprimir;
}

function crear_persona(numero) {

    for (let i = 0; i < numero; i++) {

        var metroscuadrados = prompt("Introduce metroscuadrados");
        var altura = prompt("altura");
        var numhab = prompt("numhab");
        var precio = parseInt(prompt("precio"));
        array_pisos[i] = new piso(metroscuadrados,
            altura, numhab, precio);
    }
}

function imprimir() {
    document.write(`${this.metroscuadrados}`);
    document.write(`<br>${this.metroscuadrados}`);
    document.write(`<br>${this.metroscuadrados}`);
    document.write(`<br>${this.metroscuadrados}`);

}


function informacion(numhab) {

    for (let index = 0; index < array_pisos.length; index++) {
        if (array_pisos[index].numhab == numhab) {
            array_pisos[index].imprimir();

        } else {
            document.write("oh lo chiento");

        }

    }
}

function calculariva(numhab) {

    for (let index = 0; index < array.length; index++) {
        if (array_pisos[index].numhab == numhab) {
            var piso_iva = array_pisos[index].precio;
            piso_iva = piso_iva * 0.21;
            document.write(`este es el iva aplicado ${piso_iva}`)
        }

    }
}