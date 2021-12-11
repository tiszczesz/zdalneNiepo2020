var a = 12;
console.log(a);
a = "aas ma dsa adsasa";
console.log(a);
var readline = require('readline').createInterface({
    input: process.stdin,
    output: process.stdout
});
readline.question('Who are you?', function (name) {
    console.log("Hey there ".concat(name, "!"));
    readline.close();
});
