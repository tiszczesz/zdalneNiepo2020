<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Impreza</title>
    <link rel="stylesheet" href="cw4.css">
</head>

<body>
    <h1>Super Impreza</h1>
    <div>
        <form action="wynik.php" method="post">
        <div class="line">
            <label for="imie">Podaj imię: </label>
            <input type="text" name="imie" id="imie">
        </div>
        <div class="line">
            <label for="data">Preferowana data imprezy: </label>
            <input type="date" name="data" id="data">
        </div>
        <div class="line">
            <label for="items">Co przyniosę: </label>
            <select name="items" id="items">
                <option value="żarcie">żarcie</option>
                <option value="picie">picie</option>
                <option value="towarzystwo">towarzystwo</option>
                <option value="dobre słowo">dobre słowo</option>
            </select>
        </div>
        <div class="line">
            <label for=""></label>
            <input type="submit" value="Zapisz">
        </div>
        </form>
    </div>
    <div><a href="lista.php">Zobacz listę uczestników</a></div>
</body>

</html>