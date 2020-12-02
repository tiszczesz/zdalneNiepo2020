<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Użycie funkcji date()</h1>
    <?php
    $d = date("Y-m-d: \c\z\a\s H.i.s");
    var_dump($d);
    $tomorrow  = mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"));
    $lastmonth = mktime(0, 0, 0, date("m") - 1, date("d"),   date("Y"));
    $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y") + 1);
    var_dump($tomorrow);
    echo date("d-m-Y",$tomorrow)."<br>";
    $now = strtotime("2020-10-03");
    echo date("Y-m-d",$now)."<br>";
    echo date("Y-m-d",mktime(0,0,0,12,31,2009));

    ?>
    <h1>Użycie klasy DateTime</h1>
    <?php
    $d1 = new DateTime("2012-03-22");
    var_dump($d1);

    echo $d1->format("Y-m-d")."<br>";
    echo $d1->getTimestamp()."<br>";
    echo strtotime($d1->format("Y-m-d"))."<br>";
    echo time()/(3600*24*365.25)."<br>";
    ?>
</body>

</html>