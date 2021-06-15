$(function(){
    $("dt").each(function(i,e){
        //console.log(e);
        $(e).click(function(e){
           // $(e.target).next().toggle("slow");
            $(e.target).next().fadeToggle("slow");

        });
    });
});