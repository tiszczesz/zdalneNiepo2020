<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super impreza</title>
    <link rel="stylesheet" href="cw5.css">
</head>

<body>
    <h1>Super impreza</h1>
    <div class="main">
        <nav>
            <ul>
                <li><a href="cw5.php">zarejestruj się</a></li>
                <li><a href="lista.php">przeglądnij listę</a></li>
            </ul>
        </nav>
        <div>
            <form action="wynik.php" method="post">
                <div class="line">
                    <label for="imie">Podaj imię: </label>
                    <input type="text" name="imie" id="imie" >
            </div>
                <div class="line">
                    <label for="data">Wybierz datę imprezy: </label>
                    <input type="date" name="data" id="data" required>
            </div>
                <div class="line">
                    <label for="item">Co przyniesiesz: </label>
                    <select name="item" id="item">
                        <option value="żarcie">żarcie</option>
                        <option value="picie">picie</option>
                        <option value="towarzystwo">towarzystwo</option>
                        <option value="dobre słowo">dobre słowo</option>
                    </select>
            </div>
            <input type="submit" value="Zapisz">
            </form>
        </div>
        <div>
        <a href="lista.php">Zobacz listę</a><br>        
    </div>
    </div>
</body>

</html>