document.addEventListener('DOMContentLoaded', function () {
  // alert("dddd");
  class Person {
    constructor(firstname, lastname, age) {
      this.firstname = firstname;
      this.lastname = lastname;
      this.age = age;
    }
    toDt() {
      return `           
            <dt>
                Nazwisko: ${this.lastname} Imię: ${this.firstname}
            </dt>
            <dd>
                Wiek: ${this.age} <br>
                ${this.fullName()}
            </dd>           
           `;
    }
    fullName(){
        return this.firstname+ " "+this.lastname;
    }
  }//-------class end --------------------------------------
  const persons = [
    new Person('Lola', 'Małecka', 23),
    new Person('Monkia', 'Ryk', 33),
    new Person('Tomasz', 'Bomasz', 19),
    new Person('Jurek', 'Ogórek', 44),
    new Person('Anna', 'Wanaa', 27)
  ]
  let html = "<dl>";
  for(let p of persons){
      html += p.toDt();
  }
  html += "</dl>";
  console.log(html);
  document.querySelector("#r1").innerHTML = html;
});
