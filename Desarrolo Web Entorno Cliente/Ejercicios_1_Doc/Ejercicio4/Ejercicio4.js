var i = 0;
var numeros = 0;

while(numeros <= 100){

    if(numeros %2 == 0 ){
        switch(true){
            case (numeros != 100):
            document.write(`${numeros}, `);
            break;

            case (numeros ==100):
            document.write(`${numeros} `);
        }
        i++;
        if(i==5){
            document.write("<br>");
            i=0;
        }
    
    }
    numeros++
}



