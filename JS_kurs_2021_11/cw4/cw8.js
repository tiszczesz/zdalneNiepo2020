function delay(ms) {
    return new Promise((resolve)=>{
        setTimeout(() => {
            resolve();
    }, ms);
  });
}

(async function () {
    console.log("do dzieła");
    await delay(2000);
    console.log("po 2s");
    await delay(1000);
    console.log("na koniec");
  })();
  