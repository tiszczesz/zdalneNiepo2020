function delay(ms, callback) {
  setTimeout(() => {
    callback();
  }, ms);
}

//delay(2000,()=>{console.log("po chwili...");});
//console.log("Zróbmy co");
(function () {
  console.log("do dzieła");
  delay(1000, () => {
    console.log("po 1s..");  
    delay(200, () => {
    console.log("...troche pozniej");
  });  
  });
  
})();
