

document.addEventListener("DOMContentLoaded", function () {
  console.log("ddd");
  let img = document.querySelector("#ob1");
  img.style.left = "200px";
  img.style.top = "200px";
  document.querySelector("#ob1").addEventListener("mousedown", function (e) {
    console.log(e);
    switch (e.buttons) {
      case 1:
        console.log("lewy");
        console.log(e.target);
        e.target.src = "p2.png";
        break;
      case 2:
        console.log("prawy");
        e.target.src = "p3.png";
        break;
      case 4:
        console.log("środkowy");
        e.target.src = "p1.png";
        break;
    }
  });
  document.body.addEventListener("keydown", function (e) {
    console.log(e);
    
    
    let left = parseInt(img.style.left);
    let top = parseInt(img.style.top);
    console.log(`left: ${left} top: ${top}`);
    switch (e.key) {
      case "w":
        console.log("ruch do góry");
        img.style.top = (top-10)+"px";
        break;
      case "s":
        console.log("ruch na dół");
        img.style.top = (top+10)+"px";
        break;
      case "a":
        console.log("ruch w lewo");
        img.style.left = (left-10)+"px";
        break;
      case "d":
        console.log("ruch w prawo");
        img.style.left = (left+10)+"px";
        break;
    }
  });
  document.querySelector("#ob1").addEventListener("dblclick", function (e) {
    e.target.src = "p1.png";
  });
  document.querySelector("#ob1").addEventListener("contextmenu", function (e) {
    e.preventDefault();
    return false;
  });
});
