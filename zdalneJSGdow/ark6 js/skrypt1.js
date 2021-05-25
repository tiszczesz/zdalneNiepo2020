document.addEventListener("DOMContentLoaded", function () {
  console.log("ddd");
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
  document.querySelector("#ob1").addEventListener("dblclick",function(e){
      e.target.src = "p1.png";
  });
  document.querySelector("#ob1").addEventListener("contextmenu", function (e) {
    e.preventDefault();
    return false;
  });
});
