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
                <?php $dd = isset($_POST['date'])? $_POST['date']:"";?>
                <label for="">Podaj swoją datę urodzenia</label>
                <input class="form-control" type="date" name="date" id="date" value=<?=$dd?> required>
            </div>
            <div class="line form-group">
                <label for="wybor">Wybirz jednostkę czasu: </label>
                <select class="form-select" name="wybor" id="wybor">
                    <option value="sekundy">sekundy</option>
                    <option value="dni">dni</option>
                    <option value="lata">lata</option>
                    <option value="miesiące">miesiące</option>
                </select>
            </div>
            <div class="line form-group">
                <input class="btn btn-primary" type="submit" value="Oblicz">
            </div>
        </form>
    </div>
    <div class="badge-info p-4 text-center">
        <?php
       // var_dump($_SERVER);
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $date = $_POST['date'];
            $wybor = $_POST['wybor'];
            $db = new DateTime($date);
            $da = new DateTime(date("Y-m-d"));
            //var_dump($db);
           // var_dump($da,$wybor);
            $int = $da->diff($db);
            var_dump($int);
        }
        ?>
    </div>
</body>

</html>