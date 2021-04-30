document.addEventListener("DOMContentLoaded",function(){
    document.querySelector("#zamow").addEventListener("click",function(){
        let ksztalt = document.querySelector("#ksztalt").value;
        let wybranyKsztlt = 1;
        switch(ksztalt){
            case '1' : wybranyKsztlt = 'miś'; break;
            case '2' : wybranyKsztlt = 'żabka'; break;
            case '3' : wybranyKsztlt = 'serce'; break;
            case 'inny' : wybranyKsztlt = 'inny'; break;
        }
        document.querySelector("#wynik").innerHTML = "Zamówiłeś żelka: "+wybranyKsztlt;
    });
});