let a:any = 12;
console.log(a);

a = "aas ma dsa adsasa";
console.log(a);

const readline = require('readline').createInterface({
    input: process.stdin,
    output: process.stdout
  });
  
  readline.question('Who are you?', name => {
    console.log(`Hey there ${name}!`);
    readline.close();
  });