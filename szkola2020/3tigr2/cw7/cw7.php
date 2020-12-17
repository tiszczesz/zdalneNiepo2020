<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="conteiner">
        <div class="d-flex d-flex-row">
            <div class="w-50 p-3 m-4">
            <form method="POST">
                <div class="form-group">
                    <label for="date">Wybierz datę: </label>
                    <input id="date" class="form-control" type="date" name="date" value="<?= isset($_POST['date'])? $_POST['date']:'';?>">
                </div>
                <div class="form-group">
                    <label for="wybor">Wybierz jednostkę</label>
                    <select id="wybor" class="form-control" name="wybor">
                        <option value="lata">lata</option>
                        <option value="miesiące">miesiące</option>
                        <option value="dni">dni</option>
                        <option value="sekundy">sekundy</option>
                        <option value="godziny">godziny</option>
                    </select>
                </div>
                <div class="form-group">
                    <input id="btn1" value="Oblicz" class="btn btn-primary w-100" type="submit" name="btn1">
                </div>
            </form>
            </div>
            <div class="w-50 p-3 m-4">
                <?php  
                if(isset($_POST['date'])){
                    $date = $_POST['date'];
                    $wybor = $_POST['wybor'];
                    $d1 = new DateTime($date);
                    $d2 = new DateTime();
                    $int = $d2->diff($d1);
                    //var_dump($d1,$d2);
                    switch($wybor){
                        case "lata": 
                            echo "<p>Ilość lat między <b>{$d2->format('d-m-Y')}</b> a <b>{$d1->format('d-m-Y')}</b> wynosi: <b>{$int->y}</b></p>";
                            break;
                        case "miesiące": 
                            $miesiace = $int->y*12+$int->m;
                            echo "<p>Ilość miesięcy między <b>{$d2->format('d-m-Y')}</b> a <b>{$d1->format('d-m-Y')}</b> wynosi: <b>{$miesiace}</b></p>";
                            break;
                        case "dni":    
                            echo "<p>Ilość dni między <b>{$d2->format('d-m-Y')}</b> a <b>{$d1->format('d-m-Y')}</b> wynosi: <b>{$int->days}</b></p>";
                            break;
                        case "sekundy":  
                            $sek1 = time()-strtotime($date);
                            $sek2 = $int->days*24*3600+$int->h*3600+$int->i*60+$int->s;
                            echo "<p>Ilość sekund między <b>{$d2->format('d-m-Y')}</b> a <b>{$d1->format('d-m-Y')}</b> wynosi: <b>{$sek1}</b></p>";
                            echo "<p>Ilość sekund między <b>{$d2->format('d-m-Y')}</b> a <b>{$d1->format('d-m-Y')}</b> wynosi: <b>{$sek2}</b></p>";
                            break;
                            case "godziny":   
                                $godziny = $int->days*24+$int->h; 
                                echo "<p>Ilość godzin między <b>{$d2->format('d-m-Y')}</b> a <b>{$d1->format('d-m-Y')}</b> wynosi: <b>{$godziny}</b></p>";
                                break;
                        default : echo "Nieokreślona jednostka czasu";
                    }
                    echo "<p>Czas pomiędzy datami lat {$int->y} miesięcy: {$int->m} "
                        ."dni: {$int->d} godzin: {$int->h}  minut: {$int->i} sekund: {$int->s}</p>";
                }
                ?>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>