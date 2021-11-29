console.log("Hello from node.js");
//console.log(window);
//alert("gggg");
const t = ["eee","wwewe","eeee","eeeee"];
t.forEach((e,i)=>{
    console.log(e,i);
});
const p = {firstname:"Adam",lastname:"Nowacki",age:34};
function Book(title,author,price){
    this.title = title;
    this.author = author;
    this.price = price;
    this.Show = function(){
        return `Informacje o książce ${this.title} ${this.author} cena: ${this.price}PLN`;
    }
}
const b = new Book("Wprowadzenie do JS","Maurycy Kiszon",45);
console.log(b.Show());
for(let item in p) {
    console.log("element obiektu: "+item);
    console.log("wartość obiektu: "+p[item]);
}
class Person{
    constructor(firstname,lastname,age){
        this.firstname = firstname;
        this.lastname = lastname;
        this.age = age;
    }
    Show(){
        return `Informacje o osobie ${this.firstname} ${this.lastname} wiek: ${this.age}`;
    }
    ShowThis(){
        console.log(this);
    }
}
const p1 = new Person("Jan","Nowak",33);
console.log(p1.Show());
console.log(new Date().getFullYear());
p1.ShowThis();
console.log(this);
