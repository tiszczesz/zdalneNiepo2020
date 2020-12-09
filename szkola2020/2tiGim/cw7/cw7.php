<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>body{padding: 30px;margin: 20px;}</style>
</head>

<body>
    <div>
       <?php $value = isset($_POST['date'])?$_POST['date']:""  ?>
        <form  method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
        <div class="form-group w-75">
        <label for="date">Podaj datę urodzenia: </label>

            <input class="form-control m-3" type="date" name="date" id="date" value="<?=$value;?>">
            <select class="form-control m-3" name="wyb" id="wyb">
                <option value="lata">lata</option>
                <option value="miesiące">miesiące</option>
                <option value="dni">dni</option>
                <option value="sekundy">sekundy</option>
            </select>
            <input class="btn btn-primary w-100 m-3" type="submit" value="Oblicz czas do dzisiaj">            
            
        </div>
           
        </form>

    </div>
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $aDate = new DateTime("now");
            $bDate = new DateTime($_POST['date']);
            // var_dump($aDate);
            // var_dump($bDate);
            $delta = $aDate->diff($bDate);
            $delta2 = $bDate->diff($aDate);
            // var_dump($delta);
            // var_dump($delta2);
            // echo "<p>Dzisiaj - urodzenia: {$delta->days}</p>";
            // echo "<p>urodzenia - dzisiaj: {$delta->days}</p>";
            $wyb = trim($_POST['wyb']);
            if($wyb==='lata'){
                echo "<p class='badge  p-3'>Ilość lat pomiędzy: ".
                   " {$aDate->format('d-m-Y')} a  {$bDate->format('d-m-Y')} to <b>{$delta->y}</b>  </p>";
            }else if($wyb==='miesiące'){
                    $miesiace = $delta->y * 12 + $delta->m;
                    echo "<p class='badge  p-3'>Ilość miesięcy pomiędzy: ".
                    " {$aDate->format('d-m-Y')} a  {$bDate->format('d-m-Y')} to <b>{$miesiace}</b>  </p>";
            }else if($wyb==='dni'){

            }else if($wyb==='sekundy'){

            }else{
                echo "<p style='color:red;'>Błędny wybór!!!</p>";
            }
        } 

        ?>
    </div>
    <script>
        console.log(window.history);
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>