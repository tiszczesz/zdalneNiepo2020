function canDrive(user) {
    console.log("użytkownik: ", user.name);
    if (user.age >= 16) {
        console.log("może jeździć samochodem");
    }
    else {
        console.log("nie może jeździć samochodem");
    }
}
var eryk = { name: "Eryk", ege: 34 };
var tom = { name: "Tom", age: 22 };
canDrive(tom);
var books = [
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
var ShowEditor = function (editor) {
    var ul = document.createElement("ul");
    for (var item in editor) {
        var li = document.createElement("li");
        var txt = document.createTextNode("".concat(item, ": ").concat(editor[item]));
        li.appendChild(txt);
        ul.appendChild(li);
    }
    return ul;
};
var ShowAllBooks = function (books) {
    var table = document.createElement("table");
    table.innerHTML = "<tr><th>Tytuł</th><th>Autor</th><th>cena</th><th>Wydawca</th></tr>";
    for (var _i = 0, books_1 = books; _i < books_1.length; _i++) {
        var b = books_1[_i];
        var tr = document.createElement("tr");
        generRow(tr, b.title);
        generRow(tr, b.author);
        generRow(tr, b.price.toString());
        var td4 = document.createElement("td");
        td4.appendChild(ShowEditor(b.editor));
        tr.appendChild(td4);
        table.appendChild(tr);
    }
    return table;
};
function generRow(tr, b) {
    var td = document.createElement("td");
    td.appendChild(document.createTextNode(b));
    tr.appendChild(td);
    return tr;
}
console.log(ShowEditor);
document.querySelector("#root").appendChild(ShowAllBooks(books));
