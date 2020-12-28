<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo date("d-m-Y H:i:s",-22220).'<br>';
    echo time()/(3600*24*365.25).'<br>';
    echo time().'<br>';
    echo mktime(10,52,0,12,10,2020).'<br>';
    echo date("d-m-Y H:i:s",mktime(10,53,0,12,3,2020)).'<br>';
    $dt_now = new DateTime("now");
    echo $dt_now->getTimestamp()."<br>";
    $dt_inny = new DateTime("11-02-2021");
    var_dump($dt_now);
    var_dump($dt_inny);
    $int1 = new DateInterval("P3Y1M");
    $dnew = $dt_now->add($int1);
    
    var_dump($int1);
    var_dump($dnew);
    echo "<div>{$dt_now->format("Y-m-d")}</div>";
    echo "<div>{$dnew->format("Y-m-d")}</div>";
    echo "<div>".strtotime("12-01-1970")/(3600*24)."</div>";
    ?>
</body>
</html>