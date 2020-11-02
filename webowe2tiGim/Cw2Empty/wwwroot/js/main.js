document.addEventListener("DOMContentLoaded",
    function() {
       document.querySelector(".wynik").addEventListener("click",
           function(event) {
               alert(event.target.innerHTML);
           }); 
    });