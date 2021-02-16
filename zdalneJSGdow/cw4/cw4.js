window.addEventListener("load",start);
function start(){
    document.querySelector("#gener").addEventListener("click",generuj);
}

function generuj(){
    //alert("generujemy tabelkę!!!!");
    let html = "<table>";
    html += "<tr><th>Imię</th><th>Nazwisko</th></tr>";
    for(let i=1;i<=10;i++){
        html += `<tr><td>Imię nr: ${i}</td><td>Nazwisko nr: ${i}</td></tr>`;
    }
    html += "</table>";
    document.querySelector("#wynik").innerHTML = html;
}
// window.addEventListener("load",function (){
//     alert("hello");
// });

