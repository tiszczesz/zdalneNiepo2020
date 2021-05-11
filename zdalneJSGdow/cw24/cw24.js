document.addEventListener('DOMContentLoaded', function () {

  function Book(title, author, price, edition) {
    this.title = title;
    this.author = author;
    this.price = price;
    this.edition = edition;
    this.show = function () {
      return `Tytuł: ${this.title} autor: ${this.author} cena: ${this.price} zł wydawnictwo: ${this.edition}`;
    };    
  }

  console.log(new Book("rrr","fff",45,"HHH"));
  const books = [
     new Book('ABC js','Jan Nowak',34.89,"ERA")  ,   //new Book(.......)
     new Book('Matemetyka','Anna Tryk', 22.89,"ERA") ,
     new Book('Książka kucharska','Roman Boman',77.89,"ERA")  ,
     new Book('Akwarium w domu',  'Matylda Skórecka', 45.89,"ERA") ,
     new Book('Rybki akwariowe',  'Matylda Skórecka',  145.89,"ERA" ),
     new Book('II wojna światowa',  'Tomasz Bomasz',  245.89,"ERA")
  ];
  
  // document.querySelector("#result1").innerHTML = book1["title"];
  
  let html = '<table><tr><th>Tytuł</th><th>Autor</th><th>Cena</th><th>Wydawnictwo</th></tr>';
  let sum = 0;
  for (let b of books) {
    html += `<tr><td>${b.title}</td><td> ${b.author}</td><td class="right">${b.price} </td> <td>${b.edition}</td></tr>`;
    sum += b.price;
  }
  html += '<tr><td class="right" colspan="4">Całkowity koszt książek: '+sum.toFixed(2)+' zł</td></tr></table>';
  document.querySelector('#result2').innerHTML = html;


});
//todo wykonać cwiczenie 22 z listą (zamienic na tabelkę) z książkami wykorzystując konstruktor zamiast tworzyć obiekty literalnie