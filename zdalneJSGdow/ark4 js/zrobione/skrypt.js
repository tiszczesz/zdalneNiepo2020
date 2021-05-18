document.addEventListener("DOMContentLoaded",function(){
    document.querySelector("#check").addEventListener("click",function(){
       // alert("go");
       const pswd = document.querySelector("#pswd").value;
        console.log(pswd);
    //    if(isDigitIn(pswd)){  // if(/\d/.test(pswd))
    //        console.log("jest cyfra");
    //    }else{
    //     console.log("brak cyfry");
    //    }
       if(pswd==""){
        document.querySelector("#result").innerHTML = "<span style='color:red;'>HASŁO JEST PUSTE</span>";
        return;
       }
       if(pswd.length>6 && isDigitIn(pswd)){
           document.querySelector("#result").innerHTML = "<span style='color:green;'>HASŁO JEST DOBRE</span>";
       }else if(pswd.length >= 4 && /*pswd.length<7   */ isDigitIn(pswd)){
        document.querySelector("#result").innerHTML = "<span style='color:blue;'>HASŁO JEST ŚREDNIE</span>";
       }else{
        document.querySelector("#result").innerHTML = "<span style='color:yellow;'>HASŁO JEST SŁABE</span>";
       }
    });
});

function isDigitIn(text){
    for(let i=0;i<text.length;i++){
        if(text[i]>='0' && text[i]<='9'){
            return true;
        }
    }
    return false;
}