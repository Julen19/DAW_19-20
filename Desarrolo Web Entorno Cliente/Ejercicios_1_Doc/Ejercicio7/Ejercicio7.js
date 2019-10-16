var i = 0;
var numeros = 0;
var suma = 0;


do {
    if (numeros % 2 == 0) {
        switch (true) {
            case (numeros != 100):
                document.write(`${numeros}, `);
                break;

            case (numeros == 100):
                document.write(`${numeros} `);
        }
        i++;
        if (i == 25) {
            document.write("<br>");
            i = 0;
            confirm("Desea continuar?");
            var continuar = confirm("Desea continuar?");
            if (continuar == false) {
                break;
            }
        }

    }
    numeros++
}
while (numeros <= 100);

