// document.addEventListener("DOMContentLoaded",function(){
//     alert("Hello");
// });
$(function(){
    alert("Hello from JQuery!!!");
    //ustawia kolor napisu na czerwony dla wszystkich p
    $("p").each(function(i,e){
        console.log(i,e)
        $(e).css({color:"red"});
    });
    //ustawia kolor tła dla pierwszego p
    $("p:first").css({backgroundColor:"yellow"});
    $("p:nth-child(even)").css({fontStyle: "italic"});
    $("p:first").html("ffff");
    console.log( $("p:first"));
});