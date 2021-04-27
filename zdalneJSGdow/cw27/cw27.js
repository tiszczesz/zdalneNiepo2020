document.addEventListener("DOMContentLoaded",function(){
    document.querySelector("#start").addEventListener("click",function(e){
        //alert("buum");
        document.querySelector(".table").innerHTML = generTab(rows,cols);
        let g1 = new Game(rounds);//start losowania
        let tds = document.querySelectorAll("table.lotto td");
        console.log(tds);
        tds.forEach(function(e,i){
            e.addEventListener("click",function(event){
                console.log(event.target.innerHTML);
                if(event.target.style.backgroundColor==="red"){
                    event.target.style.backgroundColor = "white";
                    g1.choiceNumbers[event.target.innerHTML]=false;
                }else{
                    if(g1.countTrue(g1.choiceNumbers)<rounds){
                        event.target.style.backgroundColor = "red";
                        g1.choiceNumbers[event.target.innerHTML]=true;
                    }
                    
                }
                console.log(g1.getAllTrue(g1.choiceNumbers));
            });
        });
        
       // console.log(g1);
        g1.setRndNumbers();
        //console.log(g1.countTrue(g1.rndNumbers));
        
    });
});
const rows = 7;
const cols = 7;
const rounds = 5;
function generTab(rows,cols){
    let number = 0;
    let html = "<table class='lotto'>";
    for(let i=0; i<rows;i++){
        html += "<tr>";
        for(let j=0;j<cols;j++){
            html += "<td>"+(++number)+"</td>"
        }
        html += "</tr>";
    }
    return html +"</table>";
}
class Game{
    constructor(maxRound,curentRound=0){
        this.maxRound = maxRound;
        this.curentRound = curentRound;
        this.rndNumbers = new Array(rows*cols+1).fill(false);
        this.choiceNumbers = new Array(rows*cols+1).fill(false);
    }
    setRndNumbers(){
        while(this.countTrue(this.rndNumbers)<rounds){
            let random = this.getOneRandom(1,49);
            console.log(random);
            this.rndNumbers[random]=true; //todo
        }
    }
    getOneRandom(min=1,max=cols*rows){
        return Math.floor(Math.random()*max+min);
    }
    countTrue(data){
        let result = 0;
        for(let i=1;i<=rows*cols;i++){
            if(data[i]===true) result++;
        }
        return result;
    }
    getAllTrue(data){
        let result = [];
        for(let i=1;i<data.length;i++){
            if(data[i]===true){
                result.push(i);
            }
        }
        return result;
    }
}