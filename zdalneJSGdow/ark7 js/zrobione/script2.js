let a = parseInt(prompt("Podaj liczbę początkową:"));
let b = parseInt(prompt("Podaj liczbę konćową:"));

if(!isNaN(a) && !isNaN(b)){
    let result = "";
    if(a>b){        
        for(let i=a; i>=b;i--){
            result += i+" ";
        }
    }else{
        for(let i=a; i<=b;i++){
            result += i+" "; 
        }
    }
    console.log(result);
    alert(result);
}else{
    alert("Błędne dane!!!");
}