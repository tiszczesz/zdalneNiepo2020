document.addEventListener("DOMContentLoaded",function(){
    document.querySelector("#zamow").addEventListener("click",function(){
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
});