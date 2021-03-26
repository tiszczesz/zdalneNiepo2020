document.addEventListener('DOMContentLoaded', function () {
  let id = '';
  document.querySelector(
    '#rectangle2'
  ).innerHTML = `<span class='zegarek'>${new Date().toLocaleTimeString()}</span>`;
  setInterval(function () {
    let red = Math.floor(Math.random() * 256);
    let green = Math.floor(Math.random() * 256);
    let blue = Math.floor(Math.random() * 256);
    const rgb = `rgb(${red},${green},${blue})`;
    document.querySelector('h1').style.color = rgb;
  }, 2000);
  id = setInterval(function () {
    const time = new Date();
    //console.log(time.toLocaleTimeString());
    document.querySelector(
      '#rectangle2'
    ).innerHTML = `<span class='zegarek'>${time.toLocaleTimeString()}</span>`;
  }, 1000);
  document.querySelector('#run').addEventListener('click', function (e) {
    if (e.target.value === 'stop') {
      console.log('stop');
      e.target.value = 'start';
      clearInterval(id);
    } else {
      console.log('start');
      e.target.value = 'stop';
      document.querySelector(
        '#rectangle2'
      ).innerHTML = `<span class='zegarek'>${new Date().toLocaleTimeString()}</span>`;
      id = setInterval(function () {
        const time = new Date();
        //console.log(time.toLocaleTimeString());
        document.querySelector(
          '#rectangle2'
        ).innerHTML = `<span class='zegarek'>${time.toLocaleTimeString()}</span>`;
      }, 1000);
    }
  });
});
// setTimeout(function(){
//     //do zrobienia po 2s
// },2000);
//todo dla ambitnych dwa przyciski start i stop zegara!!!!   settimeOut
//https://www.w3schools.com/jsref/met_win_setinterval.asp

//podobnie wykonać aplikację ze stoperem (start,stop) czas w sekundach
