document.addEventListener("DOMContentLoaded", function () {
    let text = document.querySelector("#text");
    text.addEventListener("keydown", function (e) {
        console.log(e);
        if(isNoDigit(e.key)===true) {
            e.preventDefault();
            return false;
        }

    });
    text.addEventListener("keypress", function (e) {
       // console.log(e);
    });
    text.addEventListener("keyup", function (e) {
       // console.log(e);
    
    
    
    
    });
    let source = document.querySelector("#source");
    source.addEventListener("keyup",function(e){
       // console.log(Reverse("Ala ma kota"));
       document.querySelector("#result").innerText = Reverse(e.target.value);
    });
    function isNoDigit(key){
        if(key>='0' && key<='9' || key=="Backspace" || key=="Delete"){
            console.log("liczba");
            return false;
        }else{
            console.log("nie liczba!!");
            return true;
        }
    }
    function Reverse(text){
        let result = "";
        for(let i=0; i<text.length;i++){
            result+= text[text.length-1-i];
        }
        return result.toUpperCase();
    }
});
//todo Wykonac cwiczenie z textarea tak aby w tej kontrolce(textarea) dowolny tekst zamienial sie na tekst pisany
//todo duzymi literami  np z klawiatury: "Ala ma kota 123"  efekt w text area: ---> "ALA MA KOTA 123"
//todo ambitne osoby kodowanie Cezara przy zapisie do textarea "Ala ma kota" klucz=2 --> "Cnc oc...."