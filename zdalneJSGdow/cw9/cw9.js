document.addEventListener("DOMContentLoaded",function(){
    document.querySelector("#cezar").addEventListener("click",Cezar);
    document.querySelector("#cezar").addEventListener("click",myAlert);

    document.querySelector("#agree").addEventListener("click",function(){
        document.querySelector("#cezar").disabled = !this.checked;
    });
    document.querySelector("#switchOff").addEventListener("click",function(e){
        const btnCezar = document.querySelector("#cezar");
        btnCezar.removeEventListener("click",myAlert);
        btnCezar.value += " Wyłączone";
        e.target.disabled = true;

    });
});
const COUNT_LETTER = 26;
function myAlert(e){
    alert(e.target.value);
}
function Cezar(){
    //alert("Będzie kodowanie Cezara!!!");
    const key = parseInt(document.querySelector("#key").value);
    if(isNaN(key)) return;
    let tekst = document.querySelector("#inputText").value;
  //  console.log(tekst);
  //   console.log(kodujTekst(tekst,key));
    document.querySelector("#result").innerHTML = kodujTekst(tekst,key);

}
function isLetter(char){
    // ploskie znaki tez /^[A-ZĄĘŻŹÓŁŃŚĆa-ząężźółńść]{1,1}$/.test("znak do sprawdzenia")
    return  /^[A-ZĄĘŻŹÓŁŃŚĆa-ząężźółńść]{1,1}$/.test(char)
}
function kodujZnak(char,key){
    if(isLetter(char)){
        //console.log(char.charCodeAt(0));
        let wynik = String.fromCharCode(char.charCodeAt(0)+key);
        if(isLetter(wynik)) return wynik;
        else return String.fromCharCode(wynik.charCodeAt(0)-COUNT_LETTER);
        
    }else{
        return char;
    }
}
function kodujTekst(tekst,key){
    let wynik = "";
    for(let znak of tekst){
       // console.log(znak,key,kodujZnak(znak,key));
       wynik +=  kodujZnak(znak,key);
      // console.log (wynik);
    }
   // console.log(wynik);
    return wynik;
}
