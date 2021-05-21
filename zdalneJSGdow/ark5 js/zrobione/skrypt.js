
document.querySelector("#oblicz").addEventListener("click", oblicz);
document.querySelector("#poprawiny").addEventListener("click",oblicz)
function oblicz() {
    //.alert("ffff");

    let ile = parseInt(document.querySelector("#ilosc").value);
    let poprawiny = document.querySelector("#poprawiny").checked;
    console.log(poprawiny);
    if (isNaN(ile)) {
        alert("Błedne dane"); 
        return;
    }
    let wynik = poprawiny == true ? ile * 100 * 1.3 : ile * 100;
    console.log(wynik);
    document.querySelector("#wynik")
        .innerHTML = "Koszt Twojego wesela to " + (wynik) + " złotych";
    //alert(ile);
}
let pics = document.querySelectorAll("img.click");
for(let p  of pics){
    p.addEventListener("click",function(){
        console.log(p);
        if(p.classList.contains("bordered")){
            p.classList.remove("bordered");
        }else{
            p.classList.add("bordered");
        }
        console.log(p.classList);
    });
}