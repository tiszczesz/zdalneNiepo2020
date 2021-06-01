let liczba = parseInt(prompt("podaj ilość kwadratów liczb"));
let result = "";
let result2 = "";
if(!isNaN(liczba)){
    liczba = liczba<0 ? -liczba : liczba;
    for(let i=1; i<=liczba;i++){
        result += (i*i)+" ";
        result2 += (Math.sqrt(i)).toFixed(3)+" ";
    }
    alert("Kwadraty: "+result+"\nPierwiastki: "+result2);
}else{
    alert("Błędne dane!!!");
}