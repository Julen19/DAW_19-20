var i = 0;

for(var numeros = 0; numeros <= 100; numeros++){


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
    
    }

