document.addEventListener("DOMContentLoaded",function(){
    document.querySelector("#zamow").addEventListener("click",function(){
        //document.querySelector("#zamow").onclick = function(){....}
        let ksztalt = document.querySelector("#ksztalt").value;
        let wybranyKsztlt = "inny kształt";
        switch(ksztalt){
            case '1' : wybranyKsztlt = 'miś'; break;
            case '2' : wybranyKsztlt = 'żabka'; break;
            case '3' : wybranyKsztlt = 'serce'; break;
            default : wybranyKsztlt = 'inny kształt'; break;
        }
        document.querySelector("#wynik").innerHTML = "Zamówiłeś żelka: "+wybranyKsztlt;
    });

    document.querySelector("#kolor").addEventListener("click",function(e){
        let red = parseInt(document.querySelector("#red").value);
        let green = parseInt(document.querySelector("#green").value);
        let blue = parseInt(document.querySelector("#blue").value);
        if(isNaN(red) || isNaN(green) || isNaN(blue)){
            alert("Błędne wartości kolorów!!");
            return;
        }
        e.target.style.backgroundColor = `rgb(${red},${green},${blue})`;
    });

});