// document.addEventListener('DOMContentLoaded', function () {
//   // alert("dddd");
//   document.querySelector('#oblicz').addEventListener('click', function () {
//     let area = parseFloat(document.querySelector('#pole').value);
//     console.log(area);
//     if(isNaN(area)){
//         document.querySelector("#wynik").innerHTML = "<span style='color:red;'>Błędne dane</span>";
//         return;
//     }
//     document.querySelector("#wynik")
//        .innerHTML = "Liczba jednolitrowych puszek farby potrzebnych do pomalowania wynosi: " 
//        + (Math.ceil(area/4));
//   });
// });

document.querySelector("#oblicz").onclick = function(){

    document.querySelector("#wynik")
       .innerHTML = "Liczba jednolitrowych puszek farby potrzebnych do pomalowania wynosi: " 
       + (Math.ceil(document.querySelector("#pole").value/4));
}
