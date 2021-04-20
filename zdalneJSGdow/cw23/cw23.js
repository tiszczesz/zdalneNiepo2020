document.addEventListener('DOMContentLoaded', function () {
  //literalnie
  const p1 = {
    imie: 'Jan',
    nazwisko: 'Nowak',
    wiek: 33,
    show: function () {
      return `${this.imie} ${this.nazwisko} wiek: ${this.wiek}`;
    },
  };
  console.log(p1);
  console.log(p1.show());
  //konstruktor
  function Person(imie, nazwisko, wiek) {
    this.imie = imie;
    this.nazwisko = nazwisko;
    this.wiek = wiek;

    this.show = function () {
      return `${this.imie} ${this.nazwisko} wiek: ${this.wiek}`;
    };
    this.chaneAge = function (age) {
      this.wiek += age;
    };
  }
  const p2 = new Person('Anna', 'Wanna', 45);
  const p3 = new Person('Adam', 'Rojek', 22);
  const p4 = new Person('Monika', 'Wyka', 21);
  p4.chaneAge(10);
  p2.chaneAge(-5);
  console.log(p2);
  console.log(p2.show());
  document.querySelector('#r1').innerHTML =
    p2.show() + ', ' + p3.show() + ', ' + p4.show();
  function Book(title, author, price, edition) {
    this.title = title;
    this.author = author;
    this.price = price;
    this.edition = edition;
    this.show = function () {
      return `Tytuł: ${this.title} autor: ${this.author} cena: ${this.price} zł wydawnictwo: ${this.edition}`;
    };

    const books = [
      new Book('ABC javascript', 'Mateusz Małecki', 34.67, 'ERA'),
      new Book('Góry polskie', 'Marian Małecki', 44.67, 'ERA'),
      new Book('Książka kucharsska', 'Mateusz Małecki', 34.67, 'ERA'),
      new Book('Inna książka', 'Mateusz Małecki', 34.67, 'ERA'),
    ];
    let html = '';
    for (let b of books) {
      html += '| ' + b.show();
    }
    document.querySelector('#r2').innerHTML = html;
  }
});
