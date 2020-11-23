<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapisz na wycieczkę</title>
    <link rel="stylesheet" href="cw4.css">
</head>

<body>
    <section class="baner">Biuro wycieczkowe</section>
    <section class="wrapper">
        <nav>
            <ul>
                <li><a href="cw4.php">Strona główna</a></li>
                <li><a href="lista.php">Lista wycieczek</a></li>
                <li><a href="zapisz.php">Zapisz się na wycieczkę</a></li>
                <li><a href="uczestnicyAll.php">Lista uczestników wycieczek</a></li>
            </ul>
        </nav>
        <section class="main">
            <?php
            require "functions.php";
            $dane = getAllWycieczki();
            //var_dump($dane);
            // echo wycieczkiToList($dane);
            ?>
            <form action="addNew.php" method="post">
                <div class="line"><label for="imie">Podaj imię: </label><input type="text" name="imie" id="imie"></div>
                <div class="line"><label for="nazwisko">Podaj nazwisko: </label><input type="text" name="nazwisko" id="nazwisko"></div>
                <div class="line"><label for="miasto">Podaj miasto: </label><input type="text" name="miasto" id="miasto"></div>
                <div class="line"><label for="ulica">Podaj ulicę: </label><input type="text" name="ulica" id="ulica"></div>
                <div class="line"><label for="grupa">Wybierz grupę wiekową: </label>
                    <?php
                    $grupy = getAllGrupy();
                    echo grupyToSelect($grupy);
                    ?>
                </div>
                <div class="line"><label for="miejsce">Wybierz wycieczkę: </label>
                    <?php
                    $wycieczki = getAllWycieczki();
                    echo wycieczkiToSelect($wycieczki);
                    ?>
                </div>
                <input type="submit" value="Zapisz">
            </form>
        </section>

    </section>
    <section class="footer">Stopka do zrobienia</section>

</body>

</html>