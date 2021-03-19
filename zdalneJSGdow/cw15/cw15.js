document.addEventListener("DOMContentLoaded",function(){
    getDate();
    console.log(getNameOfDay(7));
});

function getDate(){
    const date = new Date();
    document.querySelector("#year").innerHTML = date.getFullYear();
    document.querySelector("#date").innerHTML = date.getDate();
    document.querySelector("#day").innerHTML =  getNameOfDay(date.getDay());
    document.querySelector("#month").innerHTML =  getNameOfMonth(date.getMonth());
    //todo jesli sobota to kolor napisu zielony niedziela czerwony
}
function getNameOfDay(numberOfDay){
    const days = {
        1: "Poniedziałek",
        2: "Wtorek",
        3: "Środa",
        4: "Czwartek",
        5: "Piątek",
        6: "Sobota",
        7: "Niedziela"
    }
    return days[numberOfDay];
}
function getNameOfMonth(numberOfMonth){
    const months = ["Styczeń","Luty","Marzec","Kwiecień","Maj","Czerwiec","Lipiec","Sierpień","Wrzesień","Październik",
                    "Listopad","Grudzień"];
    return months[numberOfMonth];
}