document.addEventListener("DOMContentLoaded", function () {
  document.querySelector("#zapisz").addEventListener("click", function () {
    //alert("go!!");
    let imie = document.querySelector("#imie").value;
    let nazwisko = document.querySelector("#nazwisko").value;
    let klasa = document.querySelector("#klasa").value;
    let plec = document.querySelector("input[name=plec]:checked").value;
    console.log(imie, nazwisko, klasa, plec);
    //todo wyswietl w div wynik
    const html =
      "Zarejestrowano: " +
      imie +
      " " +
      nazwisko +
      " do klasy: " +
      klasa +
      " płeć: " +
      plec;
      document.querySelector("#wynik").innerHTML = html;
  });
});
