$(function(){
   // alert("dddd");
   $("#zapisz").click(function(){
    //alert("dddd");
    let imie = $("#imie").val();
    let nazwisko = $("#nazwisko").val();
    let klasa = $("#klasa").val();
    let plec = $("input[name=plec]:checked").val();
    let zaint = $("input[type=checkbox]:checked");
    let myZaint = "Moje zainteresowania: <ul>";
    if(zaint.length>0){
        zaint.each(function(i,e){
            console.log(i,e);
            myZaint += "<li>"+e.value+"</li>";
        });
        myZaint += "</ul>";
    }
    console.log(imie,nazwisko,klasa,plec,myZaint);
    const tekst =`Zarejestrowano: ${imie} ${nazwisko} do klasy:
            ${klasa} płeć: ${plec} ${myZaint}`;
    $("#wynik").html(tekst);
   });
});