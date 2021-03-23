document.addEventListener("DOMContentLoaded",function(){
    let sprite = document.querySelector(".sprite");
    
  //  sprite.style.left = "50px";
    let id=setInterval(function(){
        let left = sprite.offsetLeft;
        console.log(document.querySelector(".scene").offsetWidth);
        left += 2;
        sprite.style.left = `${left}px`;
        if(left+sprite.offsetWidth >=  document.querySelector(".scene").offsetWidth){
            clearInterval(id);
        }
        
    },50);
});