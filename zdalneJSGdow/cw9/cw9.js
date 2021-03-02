document.addEventListener("DOMContentLoaded",function(){
    document.querySelector("#cezar").addEventListener("click",Cezar);
    document.querySelector("#agree").addEventListener("click",function(){
        document.querySelector("#cezar").disabled = !this.checked;
    });
    document.querySelector("#switchOff").addEventListener("click",function(){
        document.querySelector("#cezar").removeEventListener("click",Cezar);
    });
});
function Cezar(){
    alert("Będzie kodowanie Cezara!!!");
}