window.addEventListener("load",start);
function start(){
    document.querySelector("#gener").addEventListener("click",generuj);
    document.querySelector("#gener2").addEventListener("click",function(){
        let rows = parseInt(document.querySelector("#rows").value);
        let cols = parseInt(document.querySelector("#cols").value);
        if(!isNaN(rows) && !isNaN(cols)){
            document.querySelector("#wynik").innerHTML = tabMnozenia(rows,cols);
        }else{
            document.querySelector("#wynik").innerHTML = "<span class='error>'Błędne dane!!!</span>";
        }
        
    });
}
function tabMnozenia(rows=20,cols=20){
    let html = "<table class='tab-mnozenia'>";
    for(let i=1;i<=rows;i++){
        html += "<tr>";
        for(let j=1; j<=cols;j++){
            html += "<td class='right'>"+(i*j)+"</td>";
        }
        html += "</tr>";
    }
    html += "</table>";
    return html;
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

