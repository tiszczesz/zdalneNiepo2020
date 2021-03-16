document.addEventListener("DOMContentLoaded",function(){
    setInterval(function(){
        let red = Math.floor(Math.random()*256);
        let green = Math.floor(Math.random()*256);
        let blue = Math.floor(Math.random()*256);
        const rgb = `rgb(${red},${green},${blue})`;
        document.querySelector("h1").style.color = rgb;
    },2000);
});
//todo dla ambitnych dwa przyciski start i stop zegara!!!!
//https://www.w3schools.com/jsref/met_win_setinterval.asp