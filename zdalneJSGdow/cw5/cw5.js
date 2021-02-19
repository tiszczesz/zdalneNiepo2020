document.addEventListener("DOMContentLoaded", function () {
    let btns = document.querySelectorAll("input[type=button]");
    console.log(btns);
    for (let b of btns) {
        b.addEventListener("click", function () {
            console.log(this.value);
            let a = parseFloat(document.querySelector("#a").value);
            let b = parseFloat(document.querySelector("#b").value);
            if (!isNaN(a) && !isNaN(b)) {
                let wynik = b !== 0 ? (a / b).toFixed(2) : "NIE DZIELIMY PRZEZ ZERO!!";
                switch (this.value) {
                    case "Dodaj":
                        document.querySelector("#wynik").innerText =
                            `${a} + ${b} = ${a + b}`;
                        break;
                    case "Odejmij":
                        document.querySelector("#wynik").innerText =
                            `${a} - ${b} = ${a - b}`;
                        break;
                    case "Pomnóż":
                        document.querySelector("#wynik").innerText =
                            `${a} * ${b} = ${a * b}`
                        break;
                    case "Podziel":
                        document.querySelector("#wynik").innerText =
                            `${a} / ${b} = ${wynik}`;
                        break;
                    default:
                        document.querySelector("#wynik").innerText = "Błędne działanie";
                }
            } else {
                document.querySelector("#wynik").innerHTML = "<span class='error'>Błędne dane</span>";
            }
        });
    }
});