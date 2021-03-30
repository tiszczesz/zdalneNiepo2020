//cala stron jest biala i szukamy skarbu niewidocznego (opacity = 0)
//probujemy go znamelzc  w wersji ambitniejszej na czas alobo click albo najechanie myszka odkrywa
// skarb
// rozpoczac prace poprzez zrobienie strony z divem o rozmiarze 100%
// jak ktos przygotuje sama strone ze skarbem w losowym miejscu
// to moze sie zglosic po ocene
//we wtorek dokonczenie jak sami nie dacie rady

document.addEventListener('DOMContentLoaded', function () {
    let time = 0
   const id =  setInterval(function(){
        document.querySelector("#timer").innerHTML = "Czas: " +(++time)+" s";
    },1000);
  const widthScene = document.querySelector('#scene').offsetWidth;
  const heightScene = document.querySelector('#scene').offsetHeight;
  const treasure = document.querySelector('#treasure');
  console.log(widthScene, heightScene);
  const top = Math.floor(Math.random() * (heightScene - treasure.offsetHeight));
  const left = Math.floor(Math.random() * (widthScene - treasure.offsetWidth));
  console.log(top, left);
  treasure.style.top = top + 'px';
  treasure.style.left = left + 'px';
  treasure.addEventListener("click",function(e){
      e.target.style.opacity = 1;
      clearInterval(id);
      document.querySelector("#wynik").innerHTML = "Znaleziono w czasie: "+time+" s.";
  });
});
