<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <h1 class="badget p-3 m-4 border text-center">Obliczanie różnicy dat</h1>
    <div class="conteiner m-3 p-3 w-50">
        <form method="post">
            <div class="form-group">
                <label for="date">Data urodzin: </label>
                <input id="date" class="form-control" type="date" name="date" value="<?= isset($_POST['date']) ? $_POST['date'] : ""; ?>">
            </div>
            <div class="form-group">
                <label for="wyb">Jednostka czasu: </label>
                <select class="form-control" name="wyb" id="wyb">
                    <option value="lata">lata</option>
                    <option value="miesiące">miesiące</option>
                    <option value="dni">dni</option>
                    <option value="sekundy">sekundy</option>
                </select>
            </div>
            <input class="btn btn-primary w-100 p-2" type="submit" value="Oblicz">
        </form>
    </div>
    <div class="border border-primary p-3 m-5 bg-warning">
        <?php
        if (filter_has_var(INPUT_POST, "date")) {      //if(isset($_POST['date']))
            $date = filter_input(INPUT_POST, "date");
            $wyb  = filter_input(INPUT_POST, "wyb");
            $now = new DateTime();
            $birth = new DateTime($date);
            // var_dump($now);
            // var_dump($birth);
            switch ($wyb) {
                case "lata":
                    $int = $now->diff($birth);
                    echo "<p>Różnica dat w latach: {$int->y}</p>";
                    break;
                case "miesiące":
                    $int = $now->diff($birth);
                    $miesiace = $int->y * 12 + $int->m;
                    echo "<p>Różnica dat w miesiącach: {$miesiace}</p>";
                    break;
                case "dni":
                    $int = $now->diff($birth);
                    // var_dump($int);
                    echo "<p>Różnica dat w dniach: {$int->days}</p>";
                    break;
                case "sekundy":

                    break;
            }
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>

</html>