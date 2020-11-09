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
            <form method="post">
                <div class="line">
                    <label for="login">Podaj login</label>
                    <input type="text" name="login" id="login" required>
                </div>
                <div class="line">
                    <label for="data">Wybierz datę przyjazdu</label>
                    <input type="date" name="data" id="data" required>
                </div>
                <div class="line">
                    <label for="funkcja">Wybierz funkcję na konferencji</label>
                    <select name="funkcja" id="funkcja">
                        <option value="uczestnik">uczestnik</option>
                        <option value="obsługa">obsługa</option>
                        <option value="prelegent">prelegent</option>
                        <option value="kierownictwo">kierownictwo</option>
                    </select>
                </div>
                <div class="line">
                    <input type="submit" value="Zapisz na konferencję">
                </div>
            </form>
        </section>
        <section class="wynik">
            <?php
                require "functions.php";
                if(!isset($_POST['login'])) die(""); 
                $login = trim($_POST['login']);  
                $data = trim($_POST['data']);  
                $funkcja = trim($_POST['funkcja']);  
                if($login!='' && $data!='')  echo rejestracja($login,$data,$funkcja);
            ?>
        </section>
    </div>
</body>

</html>