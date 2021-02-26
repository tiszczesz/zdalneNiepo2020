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
        updateAll();
    });
    document.querySelector("#green").addEventListener("change",function(e){
        console.log(e.target);
        updateAll();
    });
    document.querySelector("#blue").addEventListener("change",function(e){
        console.log(e.target);
        updateAll();
    });
    document.querySelector("#size").addEventListener("change",function(e){
        let wynik = document.querySelector("#wynik");
        wynik.style.fontSize = e.target.value+"px";
    });
    //dodac input tekst na imie i nazwisko i przycisk
    //przy zdarzeniu change zamieni wszystkie litery na duze
    function updateAll(){
        let wynik = document.querySelector("#wynik");
        let red = document.querySelector("#red").value;
        let green = document.querySelector("#green").value;
        let blue = document.querySelector("#blue").value;
        wynik.style.backgroundColor = `rgb(${red},${green},${blue})`;
    }
});