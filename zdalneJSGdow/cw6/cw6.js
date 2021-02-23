document.addEventListener("DOMContentLoaded", function () {
    const t1 = ["ala", "bela", "ela", "mela", 34, 89.90, 3, true, "pppp", 3];
    console.log(t1.length);
    console.log(t1[0], t1[t1.length - 1], t1.lastIndexOf(3));
    //  document.querySelector("#first").innerText = t1;
    document.querySelector("#first").innerHTML = arrayToList(t1);
    console.log(t1);
    t1.pop();
    console.log(t1);
    t1.shift();
    console.log(t1);
    t1.push("nowy element na końcu");
    t1.unshift("nowy element na poczatku");
    console.log(t1);
    //todo utworzyć liste rozwijalna (select) z kolorami z tablicy i umiescic w div second
    const colors = ["white", "red", "green", "blue", "yellow", "pink"];
    //  document.querySelector("#second").innerHTML = arrayToSelect1(colors);
    document.querySelector("#second").innerHTML = arrayToSelect2(colors);
    document.querySelector("#colors").addEventListener("change",function(){//dodaje nowe funkcje do zdarzenia change
        console.log(this);
        document.body.style.backgroundColor = this.value;
    });
    //document.getElementById("colors").onchange = function(){};//zamienia na nowa funkcje przy zdarzeniu change

});
function arrayToList(tab) {
    let html = "<ol>";
    for (let item of tab) {
        html += "<li>" + item + "</li>";
    }
    return html + "</ol>";
}
// function arrayToSelect1(data) {
//     let html = "Pierwsza metoda: <select id='colors'>";
//     data.forEach(function (elem) {
//         html += `<option value='${elem}'>${elem}</option>`;
//     });
//     return html + "</select>";
// }
function arrayToSelect2(data) {
    let html = "Druga metoda: <select id='colors'>";
    for (let item of data) {  //for(let i=0;i<data.length;i++){   .... ${data[i]}}
        html += `<option value='${item}'>${item}</option>`;
    }
    return html + "</select>";
}