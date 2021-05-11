document.querySelector("#oblicz").onclick = function(){
    let wybor = document.querySelector("#jakosc").value;
    console.log(wybor);
    let area = parseFloat(document.querySelector('#pole').value);
    document.querySelector("#wynik")
      .innerHTML =  "Liczba jednolitrowych puszek farby potrzebnych do pomalowania wynosi: "
            +(Math.ceil(area/wybor));

}