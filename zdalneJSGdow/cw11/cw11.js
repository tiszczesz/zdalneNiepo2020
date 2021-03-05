document.addEventListener("DOMContentLoaded",function(){
    document.querySelector("#btnGeneruj").addEventListener("click",function(e){
        const rows = parseInt(document.querySelector("#rows").value);
        const cols = parseInt(document.querySelector("#cols").value);
        if(isNaN(rows) || isNaN(cols)){
            document.querySelector("#table").innerHTML = "Błędne dane!!";
            return;
        }
        document.querySelector("#table").innerHTML = generTab(rows,cols);
        const tds = document.querySelectorAll("#table td");
      //  console.log(tds);
        for(let item of tds){
            item.addEventListener("mousedown",function(e){
                console.log(e.target.innerHTML);
               switch(e.buttons){
                   case 1:  e.target.innerHTML = "<img src='media/krzyzyk.png' alt='krzyzyk'> ";  break;
                   case 2:  e.target.innerHTML = "<img src='media/kolko.png' alt='kolko'>";  break;
                   default :    e.target.innerHTML = ""; 
               }
            });
            item.addEventListener("contextmenu",function(e){
                e.preventDefault();
                return false;
            });
        }
    });
});
function generTab(rows,cols){
    let html = "<table>";
    for(let i=0; i < rows; i++){
        html += "<tr>";
        for(let j=0; j < cols; j++){
            html += "<td><img ></td>";
        }
        html += "</tr>";
    }
   // console.log(html);
    return html+"</table>";
}