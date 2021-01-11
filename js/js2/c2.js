import Person from './Person.js';

document.querySelector("#btn").addEventListener("click",()=>{
  const p1 = new Person("Jan","Nowak",44);
  document.querySelector("#d1").innerText = p1.info();
});