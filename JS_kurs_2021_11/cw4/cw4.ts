
function canDrive(user: User): void {
    console.log("użytkownik: ", user.name);
    if (user.age >= 16) {
        console.log("może jeździć samochodem");
    } else {
        console.log("nie może jeździć samochodem");
    }
}

const eryk = { name: "Eryk", ege: 34 };
const tom = { name: "Tom", age: 22 };
canDrive(tom);

interface User {
    name: string;
    age: number;
}
const books: Array<Book> = [
    {
        title: "ala ma kota", author: "Antoni Małecki", price: 34.66,
        editor: { name: "ASP Editors", address: "Młyńska 34", dateOf: "12-12-2002" }
    },
    {
        title: "rrrr", author: "Antoni Małecki", price: 34.66,
        editor: { name: "ASP Editors", address: "Młyńska 34", dateOf: "04-11-2002" }
    },
    {
        title: "ttttt", author: "Antoni Małecki", price: 34.66,
        editor: { name: "ASP Editors", address: "Młyńska 34", dateOf: "09-12-2012" }
    },
];
console.log(books);

const ShowEditor = (editor: Editor): HTMLUListElement => {
    let ul = document.createElement("ul");
    for (let item in editor) {
        let li = document.createElement("li");
        let txt = document.createTextNode(`${item}: ${editor[item]}`);
        li.appendChild(txt);
        ul.appendChild(li);
    }
    return ul;
};
const ShowAllBooks = (books: Array<Book>) => {
    let table = document.createElement("table");
    table.innerHTML = "<tr><th>Tytuł</th><th>Autor</th><th>cena</th><th>Wydawca</th></tr>";
    for (let b of books) {
        let tr = document.createElement("tr");
        generRow(tr, b.title);
        generRow(tr, b.author);
        generRow(tr, b.price.toString());
        let td4 = document.createElement("td");
        td4.appendChild(ShowEditor(b.editor));
        tr.appendChild(td4);
        table.appendChild(tr);
    }
    return table;
}

function generRow(tr: HTMLTableRowElement, b: string) {
    let td = document.createElement("td");
    td.appendChild(document.createTextNode(b));
    tr.appendChild(td);
    return tr;
}
interface Book {
    title: string;
    author: string;
    price: number;
    editor: Editor;
}
interface Editor {
    name: string;
    address: string;
    dateOf: string;
}
console.log(ShowEditor);
document.querySelector("#root").appendChild(ShowAllBooks(books));
