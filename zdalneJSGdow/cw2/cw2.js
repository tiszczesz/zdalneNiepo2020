document.addEventListener("DOMContentLoaded", function () {
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
    // ------------pierwsze
    for (let i = 0; i < 10; i++) {
        console.log(Math.floor(Math.random() * 100));
        html1 += Math.floor(Math.random() * 100) + " ";
    }
    elem1.innerHTML += html1;
    // cwiczenie drugie petla while
    //todo wyswietlić dodatkowo ilość wylosowanych liczb "suma wynosi: XX ilośc liczb: YY"

    // ------------drugie
    let html2 = "<br>";
    let suma = 0;
    let licznik = 0;
    while (suma < 100) {
        let losowa = Math.floor(Math.random() * 10);
        html2 += losowa;
        suma += losowa;
        if (suma < 100) {
            html2 += "+";
        } else {
            html2 += "=";
        }

        licznik++;
    }
    html2 += suma + " ilość liczb: " + licznik;
    elem2.innerHTML += html2;

    // ------------trzecie
    //todo wyświetlanie losowych liczb aż pojawi się zero obliczenie ich sumy, sredniej maksymanej i minimalnej (nie uwzgledniajac ZERA)

    losowa = 0;
    licznik = 0;
    let min = Number.MAX_VALUE;
    let max = Number.MIN_VALUE;
    suma = 0;
    let html3 = "<br>";
    do {
        losowa = Math.floor(Math.random() * 40);
        if (losowa !== 0) {
            licznik++;
            suma += losowa;
            max = losowa>max ? losowa : max;
            min = losowa<min ? losowa : min;
        }
        html3 += losowa + " ";
    } while (losowa !== 0);
   
  
    html3 += "<br>";
    if (licznik === 0) {
        html3 += "Zbiór pusty";
    } else { 
        let avg = suma/licznik;
        html3 += `Dane statystyczne zbioru: suma: ${suma} ilość liczb: ${licznik} średnia liczb: ${avg.toFixed(2)}
                 max: ${max} min: ${min}`  ;  
    }
    elem3.innerHTML += html3;
});