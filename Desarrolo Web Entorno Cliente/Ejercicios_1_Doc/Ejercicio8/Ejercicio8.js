var i = 0;
var suma = 0;

for (var numeros = 0; numeros <= 100; numeros++) {
    suma = numeros + suma;


    switch (true) {
        case (numeros != 100):
            if (suma <= 1000) {
                document.write(`${suma}, `);
                break;
            }
        case (numeros == 100):
            if (suma <= 1000) {
                document.write(`${suma} `);
                break;
            }
    }
    i++;
    if (i == 4) {
        document.write("<br>");
        i = 0;
    }



}

