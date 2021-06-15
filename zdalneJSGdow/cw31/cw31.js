$(function(){
    $("dt").each(function(i,e){
        //console.log(e);
        $(e).click(function(e){
           // $(e.target).next().toggle("slow");
            $(e.target).next().slideToggle("slow");
           // $(e.target).next().fadeToggle("slow");
        });
    });
    $(".baner").click(function(){
        //todo - wszystkie dd zwijaja sie razem
        $("dd").each(function(i,e){
            $(e).slideToggle("slow");
        });
    });
});