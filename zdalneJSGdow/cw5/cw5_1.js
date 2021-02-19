document.addEventListener("DOMContentLoaded",function(){
    //alert("dddd");
    //console.log("działa?");
    document.querySelector("#dodaj").addEventListener("click",function(){
        console.log(this.value);
        let a = parseFloat(document.querySelector("#a").value);
        let b = parseFloat(document.querySelector("#b").value);
        if(!isNaN(a) && !isNaN(b)){
            document.querySelector("#wynik").innerHTML = `${a} + ${b} = ${a+b}`;
        }else{
            document.querySelector("#wynik").innerHTML = "Błędne dane!!";
        }

    });
    document.querySelector("#odejmij").addEventListener("click",function(){
        console.log(this.value);
        let a = parseFloat(document.querySelector("#a").value);
        let b = parseFloat(document.querySelector("#b").value);
        if(!isNaN(a) && !isNaN(b)){
            document.querySelector("#wynik").innerHTML = `${a} - ${b} = ${a-b}`;
        }else{
            document.querySelector("#wynik").innerHTML = "Błędne dane!!";
        }
    });
    document.querySelector("#pomnoz").addEventListener("click",function(){
        console.log(this.value);
        let a = parseFloat(document.querySelector("#a").value);
        let b = parseFloat(document.querySelector("#b").value);
        if(!isNaN(a) && !isNaN(b)){
            document.querySelector("#wynik").innerHTML = `${a} * ${b} = ${a*b}`;
        }else{
            document.querySelector("#wynik").innerHTML = "Błędne dane!!";
        }
    });
    document.querySelector("#podziel").addEventListener("click",function(){
        console.log(this.value);
        let a = parseFloat(document.querySelector("#a").value);
        let b = parseFloat(document.querySelector("#b").value);
        if(!isNaN(a) && !isNaN(b)){
            let wynik = b!==0 ? (a/b).toFixed(2) : "BRAK WYNIKU!!";
            document.querySelector("#wynik").innerHTML = `${a} / ${b} = ${wynik}`;
        }else{
            document.querySelector("#wynik").innerHTML = "Błędne dane!!";
        }
    });
});