document.addEventListener("DOMContentLoaded",function(){
    //literalnie
    const p1 = {
        imie:"Jan",
        nazwisko:"Nowak",wiek:33,
        show:function(){
            return `${this.imie} ${this.nazwisko} wiek: ${this.wiek}`;
        }};
    console.log(p1);
    console.log(p1.show());
    //konstruktor
    function Person(imie,nazwisko,wiek){
        this.imie = imie;
        this.nazwisko = nazwisko;
        this.wiek = wiek;

        this.show = function(){
            return `${this.imie} ${this.nazwisko} wiek: ${this.wiek}`;
        }
    }
    const p2 = new Person("Anna","Wanna",45);
    const p3 = new Person("Adam","Rojek",22);
    const p4 = new Person("Monika","Wyka",21);
    console.log(p2);
    console.log(p2.show());
    document.querySelector("#r1").innerHTML = p2.show()+", " +p3.show()+", "+p4.show();
    
});