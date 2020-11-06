<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cw3.css">
</head>
<body>
    <div>
        <form method="post">
            <div class="line">
                <label for="login">Podaj login: </label>
                <input type="text" name="login" id="login">
            </div>
            <div class="line">
            <label for="data">Podaj data: </label>
                <input type="date" name="data" id="data">
            </div>
            <div class="line">
                <label for="funkcja">Wybierz fukcję: </label><br>
                <select name="fun" id="fun">
                    <option value="uczestnik">uczestnik</option>
                    <option value="organizator">organizator</option>
                    <option value="prelegent">prelegent</option>
                    <option value="obsługa techniczna">obsługa techniczna</option>
                </select>
            </div>
            <input type="submit" value="Zarejestruj na konferencję">
        </form>
    </div>

    <div>
        <?php
        if(isset($_POST['login'])){
            $login = trim($_POST['login']);
            $data = trim($_POST['data']);   
            $fun = trim($_POST['fun']);
            if($login!='' && $data!=''){
                $f = fopen("rejestracja.txt",'a');
                if($f){
                    fwrite($f,$login.'|'.$data.'|'.$fun.PHP_EOL);
                    fclose($f);
                    echo "<div>Zarejestrowano: {$login}</div>";
                }else{
                    echo "<div>Błąd rejestracji: {$login}</div>";
                }
            }
        }
        ?>
        <div><a href="lista.php">Zobacz wszystkich uczestników</a></div>
        <div><a href="admin.php">Administracja użytkowniakami uczestników</a></div>
    </div>
</body>
</html>