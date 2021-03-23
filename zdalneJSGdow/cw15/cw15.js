document.addEventListener("DOMContentLoaded",function(){
    getDate();
    
});

function getDate(){
    const date = new Date();
    document.querySelector("#year").innerHTML = date.getFullYear();
    document.querySelector("#date").innerHTML = date.getDate();
    document.querySelector("#day").innerHTML =  getNameOfDay(date.getDay());
    document.querySelector("#month").innerHTML =  getNameOfMonth(date.getMonth());
    
}
function getNameOfDay(numberOfDay){
    console.log(numberOfDay)
    const days =["Niedziela","Poniedziałek","Wtorek","Środa","Czwartek","Piątek","Sobota"]; 
      
    let color = "";
    if(numberOfDay===6){
        color="green";
    }else if(numberOfDay===0){
        color = "red";
    }else{
        color="black";
    }
    console.log(`<span style="color: ${color};">${days[numberOfDay]}</span>`)
    return `<span style="color: ${color};">${days[numberOfDay]}</span>`;
}
function getNameOfMonth(numberOfMonth){
    const months = ["Styczeń","Luty","Marzec","Kwiecień","Maj","Czerwiec","Lipiec","Sierpień","Wrzesień","Październik",
                    "Listopad","Grudzień"];
    return months[numberOfMonth];
}