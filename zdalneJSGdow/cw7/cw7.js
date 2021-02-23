document.addEventListener("DOMContentLoaded",function(){
    console.log("załadowano");
    document.querySelector("#opis").addEventListener("change",function(event){
        console.log(event.target,event.target.value);
        console.log(this,this.value);
        event.target.value = event.target.value.toUpperCase();
    });
    //dodac input tekst na imie i nazwisko i przycisk
    //przy zdarzeniu change zamieni wszystkie litery na duze
});