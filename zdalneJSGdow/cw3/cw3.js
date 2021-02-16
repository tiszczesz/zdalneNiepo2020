document.addEventListener("DOMContentLoaded", function(){

    document.querySelector("#first").addEventListener("click",function(){
        alert(this.innerHTML);
    });

    document.querySelector("#last").addEventListener("click",function(){
        console.log(this);
        if(this.style.color!="red") this.style.color = "red";
        else this.style.color = "black";
    });
    //let last = document.querySelector("#last");
   // if(last!==null){
    //    last.addEventListener("click",function(){});
   // }

    let pars = document.querySelectorAll("p");
    // for(let i=0;i<pars.length;i++){
    //     console.log(pars[i].innerHTML);
    // }
    for(let p of pars){
        p.addEventListener("click",function(){
            if(this.style.backgroundColor!="yellow") this.style.backgroundColor="yellow";
            else this.style.backgroundColor="white";
        });
    }
    pars.forEach(function(a,b){
        console.log(a,b);
    })
   // console.log(pars);
});