<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziennik</title>
    <link rel="stylesheet" href="cw5.css">
</head>
<body>
<div>
    <form action="wynik.php" method="post">
    <div class="line">
        <label for="imie">Podaj imię: </label>
        <input type="text" name="imie" id="imie" required>
    </div>
    <div class="line">
        <label for="nazwisko">Podaj nazwisko: </label>
        <input type="text" name="nazwisko" id="nazwisko" required>
    </div>
    <div class="line">
        <label for="ocena">Podaj ocena: </label>
        <input type="number" name="ocena" id="ocena" required min="1" max="6">
    </div>
    <div class="line">
        <label for="przedmiot">Wybierz przedmiot</label>
       <?php
        require "functions.php";
        $topics = getAllTopic("przedmioty.txt");
        echo topicToSelect($topics);
       ?>
       
    </div>
    <div class="line">
        <input type="submit" value="Zapisz informację">
    </div>
    </form>
    </div>
</body>
</html>