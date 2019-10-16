var array = ['casa', 'mesa', 'perro', 'gato'];
var array1 = ['house', 'table', 'dog', 'cat'];

var intr = prompt(`Introduce una de las 
siguientes palabras ${array}`);
intr = intr.toLowerCase();

switch (true) {
    case (intr == 'casa'):
        document.write(`La traduccion de la palabra ${intr} es: ${array1[0]}`);
        break;
    case (intr == 'mesa'):
            document.write(`La traduccion de la palabra ${intr} es: ${array1[1]}`);

        break;
    case (intr == 'perro'):
            document.write(`La traduccion de la palabra ${intr} es: ${array1[2]}`);

        break;
    case (intr == 'gato'):
            document.write(`La traduccion de la palabra ${intr} es: ${array1[3]}`);

        break;

    default:
        break;
}

