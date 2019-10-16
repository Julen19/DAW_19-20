function persona(dni, Nombre, telefono, edad) {
    this.dni = dni;
    this.Nombre = Nombre;
    this.telefono = telefono;
    this.edad = edad;
    this.imprimir = imprimir;

}
var array_personas = [];

function crear_persona(numero) {

    for (let i = 0; i < numero; i++) {

        var dni = prompt("Introduce dni");
        var nombre = prompt("nombre");
        var tlf = prompt("telefono");
        var edad = parseInt(prompt("edad"));
        array_personas[i] = new persona(dni,
            nombre, tlf, edad);
    }
}

function imprimir() {
    document.write(this.Nombre);
    document.write(this.dni);
    document.write(this.telefono);
    document.write(this.edad);

}

function mostrar_personas(dni) {


    for (let index = 0; index < array_personas.length; index++) {
        array_personas[index].dni == dni;
        if (array_personas[index].dni == dni) {
            array_personas[index].imprimir();

        } else {
            document.write("oh lo chiento");

        }
    }

}