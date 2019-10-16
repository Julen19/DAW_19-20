var numeroIntr = parseInt(prompt(`Introduce un nunero positivo 
desde hasta 3 cifras`));

var num3dig = numeroIntr - 999;
if (num3dig <= 0) {
    num3dig = numeroIntr + 1000;
    if (num3dig >= 1000) {

        switch (true) {
            case (0 <= numeroIntr && numeroIntr < 10):
                document.write(`El numero introducido
                ${numeroIntr} tiene 1 digito`);
                break;
            case (10 <= numeroIntr && numeroIntr < 100):
                document.write(`El numero introducido
                    ${numeroIntr} tiene 2 digitos`);
                break;
            case (100 <= numeroIntr && numeroIntr < 1000):
                document.write(`El numero introducido
                        ${numeroIntr} tiene 3 digitos`);
                break;
            case (numeroIntr == 0):
                document.write(`El numero introducido es
                ${numeroIntr} y tiene 1 digito`);
                break;

            default:
                break;
        }

    } else {
        document.write(`El numero introducido
        ${numeroIntr} es negativo`);
    }

} else {

    document.write(`El numero introducido
    ${numeroIntr} tiene mas de 3 digitos`);

}


