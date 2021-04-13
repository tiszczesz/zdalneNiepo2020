document.addEventListener('DOMContentLoaded', function () {
  const ages = document.querySelectorAll('.age');
  // console.log(ages);
  for (let a of ages) {
    //console.log(a.parentNode);
    if (a.innerHTML < 18) {
      a.parentNode.style.backgroundColor = 'red';
    }
    //todo wiersze w ktorych sa osoby o nazwisku krotszym niz 5 znakow maja miec kolor tekstu żółty
  }
  const lastnames = document.querySelectorAll('.lastname');
  // console.log(lastnames);
  lastnames.forEach(function (v) {
    console.log(v);
    if (v.innerHTML.trim().length < 5) {
      v.parentNode.style.color = 'orange';
    }
  });
  const trs = document.querySelectorAll('tr');
  for (let elem of trs) {
    elem.addEventListener('dblclick', function (e) {
      //    console.log(e.target.parentNode.parentNode.children);
      e.target.parentNode.parentNode.removeChild(e.target.parentNode);
    });
  }
  //todo zbior paragrafów w divie i klikniecie podwójne usuwa klikniety paragraf
  const pars = document.querySelectorAll('#container p');
  console.log(pars);
  let newElem = document.createElement("p");
  newElem.innerHTML = "To jest zupełnie nowy element";
  newElem.addEventListener("contextmenu",function(e){e.preventDefault()});

  let lista = document.createElement("ol");
  for(let i=0;i<10;i++){
      let elemListy = document.createElement("li");
      elemListy.innerHTML = "Element listy numer: "+i;
      lista.appendChild(elemListy);
  }
  document.body.appendChild(lista);
  pars.forEach(function (elem) {
    elem.addEventListener('dblclick', function (e) {
      //alert(e.target.innerHTML);
      document.querySelector('#container').removeChild(e.target);
    });
    elem.addEventListener("mousedown",function(e){
        console.log(e);
        if(e.buttons===2){
            e.target.replaceWith(newElem);
        }
    });
    elem.addEventListener("contextmenu",function(e){e.preventDefault();});

  });
});
