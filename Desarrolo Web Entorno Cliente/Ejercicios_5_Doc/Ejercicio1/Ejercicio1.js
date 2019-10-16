function mejornota() {


    var Asignatura0 = new Array(3);
    Asignatura0[0] = 2;
    Asignatura0[1] = 7;
    Asignatura0[2] = 8;
    var Asignatura1 = new Array(3);
    Asignatura1[0] = 8;
    Asignatura1[1] = 5;
    Asignatura1[2] = 6;
    var Asignatura2 = new Array(3);
    Asignatura2[0] = 3;
    Asignatura2[1] = 8;
    Asignatura2[2] = 4;
    var Asignatura3 = new Array(3);
    Asignatura3[0] = 10;
    Asignatura3[1] = 3;
    Asignatura3[2] = 7;

    var asignaturas = new Array(4);
    asignaturas[0] = Asignatura0;
    asignaturas[1] = Asignatura1;
    asignaturas[2] = Asignatura2;
    asignaturas[3] = Asignatura3;



    document.write("<table width=250 border=1 cellpadding=1 cellspacing=1>");
    var notamediaalta = 0;

    for (var i = 0; i < asignaturas.length; i++) {
        document.write("<tr>");
        document.write(("<td><b>Asignatura " + i + "</b></td>"));
        for (var j = 0; j < asignaturas.length - 1; j++) {
            document.write("<td>" + asignaturas[i][j] + "</td>");
            notamediaalta = notamediaalta + parseInt(asignaturas[1][j]);


        }
        document.write("</tr>");


    }
    document.write("</table><br>");

    var bestnote = Math.max(parseInt(asignaturas));
    document.write(`Esta es la mejor nota entre todas las asignaturas ${bestnote} <br>`);
    document.write(parseInt(`${notamediaalta}`));

}