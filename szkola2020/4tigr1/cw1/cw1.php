<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia</title>
</head>

<body>
    <h1>Przychodnia</h1>
    <h3>Dodaj wizytę</h3>
    <section id="main">
        <form action="dodajWizytę.php" method="post" id="form1">

            <div class="line">
                <label for="imie">Podaj imię: </label>
                <input type="text" name="imie" id="imie">
            </div>
            <div class="line">
                <label for="nazwisko">Podaj nazwisko: </label>
                <input type="text" name="nazwisko" id="nazwisko">
            </div>
            <div class="line">
                <label for="data">Wybierz datę wizyty</label>
                <input type="date" name="data" id="data">
            </div>
            <div class="line">
                <label for="lekarz">Lekarz</label>
                <?php 
                require "functions.php";
                //var_dump( getAllDoctors());
                echo toSelect(getAllDoctors());
                 ?>
            </div>
            <div class="line">
                <label for="opis">Opis wizyty</label>
                <textarea name="opis" id="opis" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="checkbox" name="zgoda" id="zgoda">Zgoda na leczenie
            </div>
            <div class="line">
                <input type="submit" value="Zapisz">
            </div>
        </form>
    </section>
    <script>
        window.onload = function(){
            document.querySelector("#form1").onsubmit = function(){
                return document.querySelector("#zgoda").checked;
            }
        }
    </script>
</body>

</html>