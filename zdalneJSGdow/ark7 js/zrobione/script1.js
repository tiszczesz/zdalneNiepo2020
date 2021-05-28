let pswd = prompt("Podaj hasło:");
if(pswd!="liczba"){
    location.href = "index.html";
}

document.addEventListener("DOMContentLoaded",function(){
    let x = parseInt(prompt("Podaj liczbę całkowitą"));
    console.log(x);
    if(isNaN(x)){
        document.querySelector("#wynik").innerHTML = "Błędne dane";
        return;
    }
    if(x>0){
        document.querySelector("#wynik").innerHTML = "Liczba "+x+" jest dotatnia";
    }else if(x<0){
        document.querySelector("#wynik").innerHTML = "Liczba "+x+" jest ujemna";
    }else if(x===0){
        document.querySelector("#wynik").innerHTML = "Liczba "+x+" to zero";
    }else{
        document.querySelector("#wynik").innerHTML = "Błędne dane";
    }
});
