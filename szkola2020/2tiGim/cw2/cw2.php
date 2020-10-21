<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .line{margin: 20px 30px;}
        label{display: inline-block; width: 180px;text-align: right;}
        input[type=radio],input[type=checkbox]{margin-left: 180px;}
    </style>
</head>
<body>
    <div>
        <form  method="post" id="form1">
        <div class="line">
        <label for="imie">Podaj imię: </label>
        <input type="text" name="imie" id="imie">
        </div>
        <div class="line">
        <label for="nazwisko">Podaj nazwisko: </label>
        <input type="text" name="nazwisko" id="nazwisko">
        </div>
        <div class="line">
        <label for="klasa">Wybierz klasę: </label>
        <select name="klasa" id="klasa">
            <option value="1A">1A</option>
            <option value="1B">1B</option>
            <option value="1C">1C</option>
            <option value="1D">1D</option>
        </select>
        </div>
        <div class="line">
            <label for="data">Wybierz datę: </label>
            <input type="date" name="data" id="data">
        </div>
        <div class="line">
            <label for="plec">Wybierz płeć: </label><br>
            <input type="radio" name="plec" value="Kobieta" checked>Kobieta<br>
            <input type="radio" name="plec" value="Mężczyzna">Mężczyzna<br>
        </div>
        <div class="line">
            <label for="zaint">Zaznacz zainteresowania: </label><br>
            <input type="checkbox" name="zaint[]" value="Sport">Sport<br>
            <input type="checkbox" name="zaint[]" value="Muzyka">Muzyka<br>
            <input type="checkbox" name="zaint[]" value="Film">Film<br>
            <input type="checkbox" name="zaint[]" value="Książki">Książki<br>
        </div>
        Zgoda na przetwarzanie danych osobowych:<br>
        <input type="checkbox" name="zgoda" id="zgoda"><br>
        <input type="submit" value="Zapisz">
        </form>
    </div>
    <div>
        <?php
        var_dump($_POST);
        if(isset($_POST['imie'])){
            //todo tiszczesz@gmail.com
        }
        ?>
    </div>
    <script>
        window.onload = function(){
            document.querySelector("#form1").onsubmit = function(){
                return document.querySelector("#zgoda").checked;
            }
        }
    </script>
</body>
</html>