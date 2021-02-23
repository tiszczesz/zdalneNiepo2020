document.addEventListener("DOMContentLoaded",function(){
    console.log("załadowano");
    document.querySelector("#opis").addEventListener("change",function(event){
        console.log(event.target,event.target.value);
        console.log(this,this.value);
        event.target.value = event.target.value.toUpperCase();
    });
    document.querySelector("#rr1").addEventListener("change",function(e){
        console.log(e.target);
        let wynik = document.querySelector("#wynik");
        if(wynik.style.visibility=="hidden"){
            wynik.style.visibility="visible";
        }else{
            wynik.style.visibility="hidden";
        }
    });
    document.querySelector("#red").addEventListener("change",function(e){
        console.log(e.target);
        let wynik = document.querySelector("#wynik");
        wynik.style.backgroundColor = `rgb(${e.target.value},255,255)`;
    });
    document.querySelector("#green").addEventListener("change",function(e){
        console.log(e.target);
        let wynik = document.querySelector("#wynik");
        wynik.style.backgroundColor = `rgb(255,${e.target.value},255)`;
    });
    document.querySelector("#blue").addEventListener("change",function(e){
        console.log(e.target);
        let wynik = document.querySelector("#wynik");
        wynik.style.backgroundColor = `rgb(255,255,${e.target.value})`;
    });
    //dodac input tekst na imie i nazwisko i przycisk
    //przy zdarzeniu change zamieni wszystkie litery na duze
});