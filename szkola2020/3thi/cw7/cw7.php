<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo date("Y")."<br>";
        echo date("y")."<br>";
        echo date("h a")."<br>";
        echo date("H")."<br>";
        echo date("d-m-Y \c\z\a\s H:i:s")."<br>";
        echo date("j-n Y")."<br>";
        echo time()/(3600*24*365.25)."<br>";
        echo date("d-m-Y  H:i:s",4000555566)."<br>";
        echo date("d-m-Y H:i:s",mktime(15,0,0,12,8,2020))."<br>";
        echo strtotime("01-01-1970 01:00:00");

        $dt = new DateTime();
        $dt1 = new DateTime("10-12-2021");

        var_dump($dt,$dt1);
        $interval = $dt1->diff($dt);
        var_dump($interval);

    ?>
</body>
</html>