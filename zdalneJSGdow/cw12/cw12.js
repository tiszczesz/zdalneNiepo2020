document.addEventListener("DOMContentLoaded", function () {
    // alert("gggg");
    document.querySelector("#run").addEventListener("click", function (e) {
        console.log("kliknieto: " + e.target);
        const choice = document.querySelector("#choice").value;
        //console.log(   choice );
        const dateNow = new Date();
        const dateChoice = new Date(document.querySelector("#data").value);
        const dayNow = Math.round(dateNow.getTime() / 1000 / 3600 / 24);
        const hoursNow = Math.round(dateNow.getTime() / 1000 / 3600 );
        const dayChoice = Math.round(dateChoice.getTime() / 1000 / 3600 / 24);
        const hoursChoice = Math.round(dateChoice.getTime() / 1000 / 3600 );
        console.log(dayNow, dayChoice);
        switch (choice) {
            case "lata":
                document.querySelector("#result")
                    .innerHTML = "Różnica w latach: " + (Math.abs(dateNow.getFullYear() - dateChoice.getFullYear()));
                break;
            case "dni":

                document.querySelector("#result")
                    .innerHTML = "Różnica w dniach: " + Math.abs(dayNow - dayChoice);
                break;
            case "tygodnie":
                document.querySelector("#result")
                    .innerHTML = "Różnica w tygodniach: " + (Math.abs(dayNow - dayChoice)/7).toFixed(2);
                break;
            case "godziny":
                document.querySelector("#result")
                    .innerHTML = "Różnica w godzinach: " + (Math.abs(hoursNow-hoursChoice));
                break;
        }

    });
});