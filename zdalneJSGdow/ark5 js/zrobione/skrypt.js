
document.querySelector("#oblicz").addEventListener("click", oblicz);
document.querySelector("#poprawiny").addEventListener("click",oblicz)
let discounts = 0;

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
    wynik = discounts!=0 ? wynik = wynik- wynik * discounts/100: wynik;
    console.log(wynik);
    document.querySelector("#wynik")
        .innerHTML = "Koszt Twojego wesela to " + (wynik) + " złotych";
    //alert(ile);
}
let pics = document.querySelectorAll("img.click");
for(let p  of pics){
    p.addEventListener("click",function(){
        discounts = 0;
        console.log(p);
        if(p.classList.contains("bordered")){
            p.classList.remove("bordered");
            
        }else{
            p.classList.add("bordered");
        }
        console.log(p.classList);
        setDiscounts();
        console.log(discounts);
    });
}
function setDiscounts(){
    let pics = document.querySelectorAll("img.click");
    for(let p of pics){
        if(p.classList.contains("bordered")){
           if(p.id=="i20") discounts += 20;
           else discounts += 50;
        }
    }
}