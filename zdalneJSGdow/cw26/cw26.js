document.addEventListener("DOMContentLoaded",function(){
    //todo stworzyc klase Book
    class Book{
        constructor(title,author,price,edition="ERA"){
            this.title = title;
            this.author = author;
            this.price = price;
            this.edition = edition;
        }
        toTableRow(){
            return `<tr>
                <td>${this.title}</td>
                <td>${this.author}</td>
                <td>${this.price}</td>
                <td>${this.edition}</td>
            </tr>`;
        }
        toListItem(){
            return `<li>tytuł: ${this.title} autor: ${this.author} ${this.price} zł wydawnictwo: ${this.edition}</li>`;
        }
    }//end Book -----------------------------
    class HtmlGener{
        static toTable(books){
            let html = '<table class="table table-bordered table-hover"><tr><th>Tytuł</th><th>Autor</th><th>Cena</th><th>Wydawnictwo</th></tr>';
            for(let b of books){
                html += b.toTableRow();
            }
            return html + "</table>";
        }
        static toList(books){
            let html = "<ol>";
            for(let b of books){
                html += b.toListItem();
            }
            return html + "</ol>";
        }
    }
    //todo stworzyc tablice ksiazek
    const books = [
        new Book('ABC javascript', 'Mateusz Małecki', 34.67, 'ERA'),
        new Book('Góry polskie', 'Marian Małecki', 44.67, 'Tryk'),
        new Book('Książka kucharska', 'Mateusz Małecki', 34.67, 'Helion'),
        new Book('rrr książka', 'Mateusz Małecki', 34.67, 'ERA'),
        new Book('hhh książka', 'Mateusz Małecki', 34.67, 'ERA'),
        new Book('uuu książka', 'Mateusz Małecki', 34.67, 'ERA'),
      ];


    //todo zapisac tablice ksiażek do html table
      document.querySelector("#r1").innerHTML = HtmlGener.toTable(books);
      document.querySelector("#r2").innerHTML =  HtmlGener.toList(books);
});