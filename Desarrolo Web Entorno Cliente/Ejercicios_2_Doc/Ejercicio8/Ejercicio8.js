var num = [];
var inter = 0;
var alto;




for (var i = 0; i<5 ; i++) {
    
    num[i]=(parseInt(prompt("Introduce el primer empleado: ")));
    
}
for(var i = 0; i<num.length ; i++){
     
    if(num[i]>0){
        inter = (num[i]+", ");
        
    }

}
document.write(inter);
