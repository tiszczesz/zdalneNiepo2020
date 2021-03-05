document.addEventListener("DOMContentLoaded", function () {
    const area = document.querySelector(".area");
    const area2 = document.querySelector(".area2");
    const area3 = document.querySelector(".area3");
    console.log(area, area2);
    area.addEventListener("mouseenter", function (e) {
        console.log("zdarzenie mouseenter na obiekcie: " + e.target);
        document.body.style.backgroundColor = "yellow";
    });
    area.addEventListener("mouseover", function (e) {
        console.log("zdarzenie mouseover na obiekcie: " + e.target);
    });
    area.addEventListener("mouseleave", function (e) {
        console.log("zdarzenie mouseleave na obiekcie: " + e.target);
        document.body.style.backgroundColor = "white";
    });
    area.addEventListener("mouseout", function (e) {
        console.log("zdarzenie mouseout na obiekcie: " + e.target);
    });

    area2.addEventListener("mousedown", function (e) {
        e.target.style.backgroundColor = "red";
        console.log(e);
    });
    area2.addEventListener("mouseup", function (e) {
        e.target.style.backgroundColor = "rgb(95, 69, 69)";
        console.log(e);
    });
    area2.addEventListener("contextmenu", function (e) {
        e.preventDefault();
        return false;
    });
    area3.addEventListener("mousedown", function (e) {
        switch (e.buttons) {
            case 1:
                e.target.innerHTML = "LEWY PRZYCISK MYSZY!!!";
                break;
            case 2:
                e.target.innerHTML = "PRAWY PRZYCISK MYSZY!!!";
                break;
            default: 
                e.target.innerHTML = "INNY PRZYCISK MYSZY!!!";
        }
    });

});
