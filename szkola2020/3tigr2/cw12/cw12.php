<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="cw12.css">
    <title>Ćwiczenie 12 - abstract class</title>
</head>

<body>
    <h1 class="badge bg-secondary w-100 text-center p-3 fs-1">Ćwiczenie 12 - abstract class</h1>
    <?php
    require_once "DocText.php";
    $d1 = new DocText(["Ala ma kota","Fajna treść dokumentu","Osttnia linijka"],"Dokument kontrolny");
   // var_dump($d1);
    echo $d1->info();
    ?>
    <!--todo dopisac klase DocImage wysokosc i szerokosc obrazka ewentualnie link do img  -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>