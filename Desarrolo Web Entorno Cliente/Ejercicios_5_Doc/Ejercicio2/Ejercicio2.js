// Crear un modelo de objetos llamado cd_musica que contenga las propiedades:
// titulo, grupo y fecha y un método que muestra esta información por pantalla. Hacer
// un programa que cree tres objetos con la información que se solicita por pantalla y
// después los muestre utilizando el método creado para ello.

var cds = new Array(3);

function cd_musica(titulo, grupo, anyo) {
    this.titulo = titulo;
    this.grupo = grupo;
    this.fecha = anyo;

}

function crear_cd() {
    for (let index = 0; index < cds.length; index++) {
        cds[index] = new cd_musica(prompt("Introduce nombre"),
            prompt("introduce disco"), prompt("Introduce fecha"));

    }
}

function ver_cds() {
    for (let index = 0; index < cds.length; index++) {

        document.write(Object.values(cds[index]));

    }
}