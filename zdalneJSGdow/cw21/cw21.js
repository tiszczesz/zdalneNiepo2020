document.addEventListener('DOMContentLoaded', function () {
  let element = document.querySelector('li');
  element.className = 'mark';
  //console.log(element);
  document.querySelector('#change').addEventListener('click', function () {
    if (element.nextElementSibling != null) {
      element.className = '';
      element = element.nextElementSibling;
      console.log(element);
      element.className = 'mark';
    }
  });

  document.querySelector("#change2").addEventListener('click',function(){
    if(element.previousElementSibling != null){
        element.className = "";
        element = element.previousElementSibling;
        element.className = "mark";
    }
  });
});
