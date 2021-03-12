document.addEventListener("DOMContentLoaded", function () {
    console.log("OK");
    document.querySelector("#run").addEventListener("click", function () {
        console.log(document.querySelector("#a").nextSibling);
        console.log(document.querySelector("#a").nextElementSibling);
        const elemA = document.querySelector("#a");
        const elemB = document.querySelector("#b");
        const aOK = ValidateNumber(elemA);
        const bOK = ValidateNumber(elemB);
        if (aOK && bOK) {
            let choice = document.querySelector("input[name='choice']:checked").value;
            console.log(choice);
            let a = parseInt(elemA.value);
            let b = parseInt(elemB.value);
            if (choice === 'iter') {
                NWDIter(a, b);
            } else {
                NWDRek(a, b);
            }
        } else {
            return;
        }
    });
});
function NWDIter(a, b) {
    let temp = b;
    let info = `NWDIter(${a},${b})`;
    while (b !== 0) {
        temp = b;
        b = a % b;
        a = temp;
    }
    document.querySelector("#wynik").innerHTML = "Obliczamy iteracyjnie " + info + " = " + a;
}
function NWDRek(a, b) {
    document.querySelector("#wynik").innerHTML = "Obliczamy rekurencyjnie";
}
function ValidateNumber(elem) {
    const value = parseInt(elem.value);
    const next = elem.nextElementSibling;
    if (isNaN(value)) {
        next.innerText = "Błędne dane!!!";
        return false;
    } else {
        next.innerText = "";
        return true;
    }
}