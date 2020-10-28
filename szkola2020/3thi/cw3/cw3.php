<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapis do pliku Konferencja</title>
    <style>
        label{display: inline-block;text-align: right;width: 170px;}
        .line{margin: 30px 20px;}
    </style>
</head>
<body>
    <h1>Zapis na konferencję</h1>
    <div>
    <form action="wynik.php" method="post">
    <div class="line">
        <label for="imie">Podaj imię: </label>
        <input type="text" name="imie" id="imie">
    </div>
    <div class="line">
        <label for="nazwisko">Podaj nazwisko: </label>
        <input type="text" name="nazwisko" id="nazwisko">
    </div>
    <div class="line">
        <label for="data">Podaj datę: </label>
        <input type="date" name="data" id="data">
    </div>
    <div class="line">
        <label for="funkcja">Wybierz funkcję</label>
        <select name="funkcja" id="funkcja">
            <option value="Organizoator">Organizoator</option>
            <option value="Prelegent">Prelegent</option>
            <option value="Uczestnik">Uczestnik</option>
            <option value="Obsługa techniczzna">Obsługa techniczzna</option>
        </select>
    </div>
    <div class="line">
        <input type="submit" value="Zapisz się na konferencję">
    </div>
    </form>
    </div>
</body>
</html>