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
    echo mktime(10,52,0,12,3,2020).'<br>';
    echo date("d-m-Y H:i:s",mktime(10,53,0,12,3,2020)).'<br>';
    ?>
</body>
</html>