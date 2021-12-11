document.querySelector("#run").addEventListener("click", function () {
    var a = document.querySelector("#a").value;
    // let b:number = parseInt((document.querySelector("#b") as HTMLInputElement).value);
    var b = (document.querySelector("#b")).value;
    document.querySelector("#result").innerHTML = "<span style='color:green;'>".concat(a + b, "</span>");
    console.log(a + b);
});
