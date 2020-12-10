<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <title>Odcinek czasu</title>
</head>

<body>
    <div class="w-75 p-3 m-5">
        <form method="post">
            <div class="form-group m-3 p-3">
                <label for="">Podaj datę: </label>
                <input type="date" name="data_b"      
                id="data_b" class="form-control" value='<?=isset($_POST['data_b'])?$_POST['data_b']:"";  ?>'>
            </div>
            <div class="form-group m-3 p-3">
                <label for="">Wybierz jednostkę: </label>
                <select class="form-control" name="wyb" id="wyb">
                    <option value="lata">lata</option>
                    <option value="miesiące">miesiące</option>
                    <option value="dni">dni</option>
                    <option value="sekundy">sekundy</option>
                </select>

            </div>
            <div class="form-group m-3 p-3">
                <input class="btn btn-primary w-100" type="submit" value="Oblicz">
            </div>
        </form>

        <div class="badge-info p-4 w-100 border">
            <?php
                if(isset($_POST['data_b'])){
                    $datab = $_POST['data_b'];
                    $wyb = trim($_POST['wyb']);
                    $dt_b = new DateTime($datab);
                    $dt_a = new DateTime("now");
                    $interval = $dt_a->diff($dt_b);
                    //var_dump($dt_a,$dt_b);
                    switch($wyb){
                        case "lata": 
                            echo "<div>Ilość lat: {$interval->y}</div>";
                           break;
                        case "miesiące":    break;
                        case "dni":    break;
                        case "sekundy":    break;
                        default:    break;
                    }
                }

            ?>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>