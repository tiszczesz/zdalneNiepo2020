<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<?php
    require "functions.php";
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        $row = getWorkerByIdWithAddress($id);
        echo "<div>Edycja pracownika {$row['imie']} {$row['nazwisko']}</div>";
        $funkcje = getFunkcje();
        $wycieczki = getFunkcjeByIDPracownika($id);
        var_dump($funkcje);
    }
    else{
        header("Location: lista.php");
    }
    ?>
</div>
    <div>
        <div>
            <form action="wynik.php" method="post">
                <div class="line">
                    <label for="imie">Podaj imię: </label>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="text" name="imie" id="imie" value="<?php echo $row['imie'];?>">
                </div>
                <div class="line">
                    <label for="nazwisko">Podaj nazwisko: </label>
                    <input type="text" name="nazwisko" id="nazwisko" value="<?php echo $row['nazwisko'];?>">
                </div>
                <div class="line">
                    <label for="opis">Opis: </label>
                    <input type="text" name="opis" id="opis" value="<?php echo $row['opis'];?>">
                </div>
                <div class="line">                   
                    <label for="ulica">Podaj ulicę: </label>
                    <input type="text" name="ulica" id="ulica" value="<?php echo $row['ulica'];?>">
                </div>
                <div class="line">
                    <label for="miasto">Podaj miasto: </label>
                    <input type="text" name="miasto" id="miasto" value="<?php echo $row['miasto'];?>">
                </div> 
                <input type="submit" value="Zapisz">      
            </form>
        </div>
        <div>
            <form method="post">
                <?php
                echo funkcjeToList($funkcje,$wycieczki);
                ?>
            </form>
        </div>
    </div>
</body>
</html>