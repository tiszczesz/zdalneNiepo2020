<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form method="post">
            <div class="line">
                <label for="login">Podaj login: </label>
                <input type="text" name="login" id="login">
            </div>
            <div class="line">
                <label for="plec">Wybierz płeć: </label><br>
                <input type="radio" name="plec" value="Kobieta" checked>Kobieta<br>
                <input type="radio" name="plec" value="Mężczyzna">Mężczyzna<br>
            </div>
            <div class="line">
                <label for="um">Wybierz umiejętnośći: </label>
                <input type="checkbox" name="um[]" value="c++">c++<br>
                <input type="checkbox" name="um[]" value="javascript">javascript<br>
                <input type="checkbox" name="um[]" value="java">java<br>
                <input type="checkbox" name="um[]" value="c#">c#<br>
            </div>
            <div class="line">
                <input type="submit" value="Zatwierdź">
            </div>
        </form>
    </div>
    <div>
        <?php
        if(isset($_POST['login'])){
            $login = trim($_POST['login']);
            $plec = $_POST['plec'];
            $um = isset($_POST['um'])? $_POST['um']:[];
        }
        
        var_dump($_POST);
        ?>
    </div>
</body>

</html>