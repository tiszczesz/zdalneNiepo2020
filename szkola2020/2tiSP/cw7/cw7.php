<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        echo date("Y",0)."<br>";
        echo date("m")."<br>";
        echo date("h a")."<br>";
        echo date("H")."<br>";
        echo date("d-m-Y H:i:s",3445555550)."<br>";
        $r = mktime(14,33,0,12,7,2020)."<br>";
        echo date("d-m-Y H:i:s",mktime(14,33,0,12,7,2020))."<br>";
        echo strtotime("7-12-2020")/(3600*24*365.25);
        $dd = new DateTime();
        var_dump($dd);

    ?>
</body>

</html>