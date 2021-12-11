let val:unknown = 12;

class Moja{
    inna(z:number):void{
        console.log( "Metoda inna: "+z);        
    }
}
val = "ala";
val = new Array();
//val = new Moja();
if(val instanceof Array){
    val.push(1212);
}
if(val instanceof Moja){
    val.inna(12);
}

console.log(val);
