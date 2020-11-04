<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konferencja naukowa</title>
    <link rel="stylesheet" href="cw4.css">
</head>

<body>
    <h1>Konferencja naukowa</h1>
    <div id="main">
        <nav>
            <ul>
                <li><a href="lista.php">Zobacz listę uczestników</a></li>
                <li><a href="cw4.php">Zarejestruj się</a></li>
            </ul>
        </nav>
        <section>
            <?php
            require "functions.php";
            $dane = getAllFromFile("rejestracja.txt");
           // var_dump($dane);
            echo showInTable($dane);
            ?>
        </section>
        
    </div>
</body>

</html>