<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "functions.php";
    echo "<p>".getRandomDate(-20,10)."</p>";
    echo "<p>".getRandomDate(20,10)."</p>";

?>
</body>
</html>