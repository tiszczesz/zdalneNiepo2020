<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super impreza</title>
    <link rel="stylesheet" href="cw5.css">
</head>

<body>
    <h1>Super impreza</h1>
    <div class="main">
        <nav>
            <ul>
                <li><a href="cw5.php">zarejestruj się</a></li>
                <li><a href="lista.php">przeglądnij listę</a></li>
            </ul>
        </nav>
        <div>
            <?php
            require "functions.php";
                if(isset($_GET['id'])){
                    $id = intval($_GET['id']);
                    echo "Edytowanie rekordu o id {$id}";
                    $dane = getFromFile("lista.txt");
                    $toEdit = $dane[$id];
                    //var_dump($toEdit);
                    $row = explode('|',$toEdit);
                    var_dump($row);

            ?>
            <form action="wynikEdit.php" method="post">
                <div class="line">
                    <label for="imie">Podaj imię: </label>
                    <input type="hidden" name="id" value='<?php echo $id;  ?>'>
                    <input type="text" name="imie" id="imie" required value='<?php echo $row[0]; ?>'>
            </div>
                <div class="line">
                    <label for="data">Wybierz datę imprezy: </label>
                    <input type="date" name="data" id="data" required value='<?php echo $row[1]; ?>'>
            </div>
                <div class="line">
                    <label for="item">Co przyniesiesz: </label>
                    <select name="item" id="item">
                        <?php
                        $items = ["żarcie","picie","towarzystwo","dobre słowo"];
                        foreach($items as $it){
                            $sel = $it==$row[2] ? " selected ": "";
                            echo "\t<option value='{$it}' {$sel}>{$it}</option>\n";
                        }


                        ?>
                        
                    </select>
            </div>
            <input type="submit" value="Zapisz">
            </form>
            <?php
             }
            ?>
        </div>
        <div>
        <a href="lista.php">Zobacz listę</a><br>        
    </div>
    </div>
</body>

</html>