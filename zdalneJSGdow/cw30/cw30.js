/* eslint-env jquery */
$(function () {
    $("#hide").click(function () {
        $("#kw1").hide("slow");
    });
    $("#show").click(function () {
        $("#kw2").show(2000, function () {
            alert("koniec");
        });
    });
    $("#toggle").click(function () {
        $("#kw3").toggle(1000);   
    });
    $("#fadeIn").click(function () {
        $("#kw4").fadeIn(1000);   
    });
    $("#fadeOut").click(function () {
        $("#kw5").fadeOut(1000);   
    });
    $("#fadeTo").click(function () {
        $("#kw6").fadeTo("slow",0.3);   
    });
    $("#fadeToggle").click(function () {
        $("#kw7").fadeToggle("slow");   
    });
});