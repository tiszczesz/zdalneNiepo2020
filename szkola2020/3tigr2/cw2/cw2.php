<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          .line{margin: 20px 30px;}
        label{display: inline-block;width: 160px;text-align: right;}
        input[type=submit]{width: 150px;padding: 10px;margin-left: 170px;}
        input[type="checkbox"],input[type=radio]{margin-left: 150px;}
    </style>
</head>
<body>
    <div>
        <form action="" method="post">
            <div class="line">
                <label for="login">Podaj login: </label>
                <input type="text" name="login" id="login">
            </div>
            <div class="line">
                <label for="jezyk">Wybierz języki programowania: </label><br>
                <input type="checkbox" name="jezyk[]" value="php">php<br>
                <input type="checkbox" name="jezyk[]" value="c++">c++<br>
                <input type="checkbox" name="jezyk[]" value="javascript">javascript<br>
                <input type="checkbox" name="jezyk[]" value="c#">c#<br>
            </div>
            <div class="line">
                <label for="plec">Wybierz płeć: </label><br>
                <input type="radio" name="plec" value="Kobieta" checked>Kobieta<br>
                <input type="radio" name="plec" value="Mężczyzna">Mężczyzna<br>
                <input type="radio" name="plec" value="Inna">Inna<br>
            </div>
            <input type="submit" value="Zapisz">
        </form>
    </div>
    <div>
        <?php
        if(isset($_POST['login'])){
            $login = trim($_POST['login']);
            $jezyk = isset($_POST['jezyk']) ? $_POST['jezyk']:[];
            $plec = $_POST['plec'];
            if($login!=''){
                echo "<div>Zarejestrowano ofertę: {$login} płeć: {$plec}</div>";
                if(count($jezyk)>0){
                    echo "Wybrane języki programowania: <ul>";
                    foreach($jezyk as $j){
                        echo "<li>{$j}</li>";
                    }
                    echo "</ul>";
                }else{
                    echo "<div>brak znajomości języków programowania</div>";
                }
            }
            //todo Porządny formularz z inputami: text number date radio checkbox i obsługa formularza
            //po stronie serwera (z walidacją)
        }
        ?>
    </div>
</body>
</html>