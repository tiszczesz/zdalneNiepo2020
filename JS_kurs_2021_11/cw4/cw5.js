var val = 12;
var Moja = /** @class */ (function () {
    function Moja() {
    }
    Moja.prototype.inna = function (z) {
        console.log("Metoda inna: " + z);
    };
    return Moja;
}());
val = "ala";
val = new Array();
//val = new Moja();
if (val instanceof Array) {
    val.push(1212);
}
if (val instanceof Moja) {
    val.inna(12);
}
console.log(val);
