document.addEventListener("DOMContentLoaded",function(){
  //  alert("dddddd");
   let elem1 = document.querySelector("#ex1");
   let elem2 = document.querySelector("#ex2");
   let elem3 = document.querySelector("#ex3");
   elem1.style.color = "red";
   elem3.style.border = "1px solid green";
   elem2.style.backgroundColor = "yellow";
    elem3.innerHTML += "<span>To jest zmieniony tekst w span</span>";
    console.log(elem1.innerText);
    console.log(elem1.innerHTML);
    let html1 = "<br>";
    for(let i=0;i<10;i++){
        console.log(Math.floor(Math.random()*100));
        html1 += Math.floor(Math.random()*100)+" ";
    }
    elem1.innerHTML += html1;
    // cwiczenie drugie petla while
    //todo wyswietlić dodatkowo ilość wylosowanych liczb "suma wynosi: XX ilośc liczb: YY"
    let html2 = "<br>";
    let suma = 0;
    let licznik = 0;
    while(suma < 100){
        let losowa = Math.floor(Math.random()*10);
        html2 += losowa+" ";
        suma += losowa;
        licznik++;
    }
    html2 += " suma wynosi: "+suma+" ilość liczb: "+licznik;
    elem2.innerHTML += html2;
});