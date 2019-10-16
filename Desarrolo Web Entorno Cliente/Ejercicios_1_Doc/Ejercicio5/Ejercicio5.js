var i = 0;
var suma = 0;

for (var numeros = 0; numeros <= 100; numeros++) {
    suma = numeros + suma;


    switch (true) {
        case (numeros != 100):
            document.write(`${suma}, `);
            break;

        case (numeros == 100):
            document.write(`${suma} `);
    }
    i++;
    if (i == 10) {
        document.write("<br>");
        i = 0;
    }



}

