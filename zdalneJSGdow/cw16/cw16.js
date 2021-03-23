document.addEventListener("DOMContentLoaded",function(){
    let sprite = document.querySelector(".sprite");
    let isRun = true;
    
  //  sprite.style.left = "50px";
    let id=setInterval(function(){
        let left = sprite.offsetLeft;
        console.log(document.querySelector(".scene").offsetWidth);
        left += 2;
        sprite.style.left = `${left}px`;
        if(left+sprite.offsetWidth >=  document.querySelector(".scene").offsetWidth){
            clearInterval(id);
            isRun = false;
        }
        
    },50);

    sprite.addEventListener("click",function(e){
        console.log(e.target);
        if(isRun){
            clearInterval(id);
            isRun = false;
        }else{
            id=setInterval(function(){
                let left = sprite.offsetLeft;
                console.log(document.querySelector(".scene").offsetWidth);
                left += 2;
                sprite.style.left = `${left}px`;
                if(left+sprite.offsetWidth >=  document.querySelector(".scene").offsetWidth){
                    clearInterval(id);
                    isRun = false;
                }
                
            },50);
            isRun = true; 
        }
        //todo  zdobyć 10 zdjęć z netu np gór i ustawić im identyczne rozmiary (nazwy 1.jpg,2.jpg,,,10.jpg)
        //utworzyc tablicę z 10 przysłowiami
        //todo baner gdzie co 5s zmienia sie obrazek gór a co 10s przysłowie będące obok obrazka
    });
});