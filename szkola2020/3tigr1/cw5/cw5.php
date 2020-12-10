<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo  date("F j, Y, H:i:s").'<br>';   
        echo  date("d-m-Y H:i:s",0).'<br>';   
        echo  date("d-m-Y H:i:s",1000000000).'<br>';   
        echo  time()/(3600*24*365.25).'<br>';   
        echo  date("d/m/Y",mktime(0,0,0,10,16,2020)).'<br>';   
        echo strtotime("03-12-2020").'<br>';
        echo date("d-m-Y",strtotime("12/03/2020")).'<br>';
        echo  mktime(0,0,0,12,3,2020).'<br>';  
        print_r(date_parse("03-12-2020"));
         echo date( DateTimeInterface::ATOM)."<br>";
         echo date( DateTimeInterface::COOKIE)."<br>";
         echo date( DateTimeInterface::RFC850)."<br>";
         echo date( DateTimeInterface::RFC7231)."<br>";
         $dt = new DateTime();
         var_dump($dt);
         echo $dt->format("d-m-Y")."<br>";
         $dinterval = new DateInterval("P2M3D");
         var_dump($dinterval);
         $dt2 = $dt->add($dinterval);
         echo $dt2->format("d-m-Y")."<br>";
         $dt0 = new DateTime("1970-01-03");
         echo $dt0->format("d-m-Y")."<br>";
         $dtint = $dt->diff($dt0);
         var_dump($dtint);
         echo $dtint->y;
       
    ?>
</body>
</html>