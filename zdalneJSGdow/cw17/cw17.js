document.addEventListener('DOMContentLoaded', function () {  
  setContent();
});
function setContent(){
    const przyslowia = [
        'Będą takie mrozy, że przymarznie cap do kozy.',
        'Chcesz być bogatym, bądź siedem lat świnią.',
        'Adam cóż by poradził, gdyby Bóg w raju Ewy nie posadził.',
        'Co się nie najesz, to się i nie naliżesz.',
        'Dobra jest zupa z bobra, a jeszcze lepsza z wieprza.',
        'Drzwi mogą być albo otwarte, albo zamknięte; trzeciej możliwości nie ma.',
        'Gdyby kózka nie skakała, to by nóżki nie złamała.',
        'Głupi marzy o bogactwie, a mądry o szczęściu.',
        'Jak gospodarz gościnny, to i ściany się rozszerzają.',
        'Jeszcze się taki nie urodził, co by każdemu dogodził.',
      ];
      let losowa = Math.floor(Math.random() * 10) + 1;
      let losowa2 = Math.floor(Math.random() * 10);
      document
        .querySelector('#obrazek')
        .setAttribute('src', 'images/' + losowa + '.jpg');
      document.querySelector('#przyslowie').innerHTML = przyslowia[losowa2];
  }