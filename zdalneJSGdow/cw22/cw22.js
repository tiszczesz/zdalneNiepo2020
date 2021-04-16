document.addEventListener('DOMContentLoaded', function () {
  const books = [
    { title: 'ABC js', author: 'Jan Nowak', price: 34.89 },
    { title: 'Matemetyka', author: 'Anna Tryk', price: 22.89 },
    { title: 'Książka kucharska', author: 'Roman Boman', price: 77.89 },
    { title: 'Akwarium w domu', author: 'Matylda Skórecka', price: 45.89 },
    { title: 'Rybki akwariowe', author: 'Matylda Skórecka', price: 145.89 },
    { title: 'II wojna światowa', author: 'Tomasz Bomasz', price: 245.89 },
  ];
  const book1 = { title: 'ABC js', author: 'Jan Nowak', price: 34.89 };
  // document.querySelector("#result1").innerHTML = book1["title"];
  document.querySelector(
    '#result1'
  ).innerHTML = `Informacje o książce: tytuł: ${book1.title} 
                autor: ${book1.author} w cenie: ${book1.price} zł`;
  for (let elem in book1) {
    console.log(elem + ': ' + book1[elem]);
  }
  let html = '<ol>';
  let sum = 0;
  for (let b of books) {
    html += `<li>${b.title} ${b.author} ${b.price} zł</li>`;
    sum += b.price;
  }
  html += '</ol><hr><div>Całkowity koszt książek: '+sum.toFixed(2)+' zł</div>';
  document.querySelector('#result2').innerHTML = html;
  book1.wydawnictwo = "NOWA ERA";
  console.log(book1);
  delete book1.price;
  console.log(book1);
});
