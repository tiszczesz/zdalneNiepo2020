<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="content p-4 border w-75 m-4">
        <form method="post">
            <div class="line form-group">
                <?php $dd = isset($_POST['date']) ? $_POST['date'] : ""; ?>
                <label for="">Podaj swoją datę urodzenia</label>
                <input class="form-control" type="date" name="date" id="date" value=<?= $dd ?> required>
            </div>
            <div class="line form-group">
                <label for="wybor">Wybirz jednostkę czasu: </label>
                <select class="form-control" name="wybor" id="wybor">
                    <option value="sekundy">sekundy</option>
                    <option value="dni">dni</option>
                    <option value="lata">lata</option>
                    <option value="miesiące">miesiące</option>
                </select>
            </div>
            <div class="line form-group">
                <input class="btn btn-primary w-100" type="submit" value="Oblicz">
            </div>
        </form>
    </div>
    <div class="badge-info p-4 text-center">
        <?php
        // var_dump($_SERVER);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $date = $_POST['date'];
            $wybor = $_POST['wybor'];
            $db = new DateTime($date);
            $da = new DateTime("now"); //new DateTime("now");
          //  var_dump($da);
            // var_dump($da,$wybor);
            $int = $da->diff($db);
            //  var_dump($int);
            switch ($wybor) {
                case "sekundy":
                    $sekundy = time() - strtotime($date);
                    $sekundy2 = $int->days*3600*24+$int->h*3600+$int->i*60+$int->s;
                    echo "<div>Różnica między <b>{$da->format('d-m-Y H:i:s')}</b> a <b>{$db->format('d-m-Y H:i:s')}</b> w sekundach: <b>{$sekundy}</b></div>";
                    echo "<div>Różnica między <b>{$da->format('d-m-Y')}</b> a <b>{$db->format('d-m-Y')}</b> w sekundach: <b>{$sekundy2}</b></div>";
                    break;
                case "dni":
                    echo "<div>Różnica między <b>{$da->format('d-m-Y H:i:s')}</b> a <b>{$db->format('d-m-Y H:i:s')}</b> w dniach: <b>{$int->days}</b></div>";
                    break;
                case "lata":
                    echo "<div>Różnica między <b>{$da->format('d-m-Y H:i:s')}</b> a <b>{$db->format('d-m-Y H:i:s')}</b> w latach: <b>{$int->y}</b></div>";
                    break;
                case "miesiące":
                    $miesiace = $int->y*12+$int->m;
                    echo "<div>Różnica między <b>{$da->format('d-m-Y H:i:s')}</b> a <b>{$db->format('d-m-Y H:i:s')}</b> w miesiącach: <b>{$miesiace}</b></div>";
                    break;
            }
        } 
        // todo 1- cw6_1.php 
        // todo 2- formularz z dwoma wyborami dat i odstęp w minutach godzinach dniach tygodniach zamiast select to input radio
        // todo 2a - strona świąteczna po załadowaniu losowa kolenda z pliku (ów) + formularz z informacją dla kogo życzenia
        ?>
       
    </div>
</body>

</html>