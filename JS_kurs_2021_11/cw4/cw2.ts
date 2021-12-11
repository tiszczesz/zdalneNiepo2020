
document.querySelector("#run").addEventListener("click",()=>{
    let a = parseInt((document.querySelector("#a") as HTMLInputElement).value);
   // let b:number = parseInt((document.querySelector("#b") as HTMLInputElement).value);
    let b:number = parseInt((document.querySelector<HTMLInputElement>("#b")).value);
    document.querySelector("#result").innerHTML = `<span style='color:green;'>${a+b}</span>`;
    console.log(a+b);
});

