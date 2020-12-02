<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php  var_dump($_SERVER)?>
    <form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    <label for="date">Podaj datę urodzenia: </label>
    <input type="date" name="date" id="date">
    <input type="submit" value="Oblicz czas do dzisiaj">
    </form>
    <!-- todo formularz do wpisania daty urodzenia input date i oblicznie czasu w sekundach-->
    </div>
    <div>
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            echo "POST";
        }else{
            echo "GET";
        }
        

        ?>
    </div>
    <script>
        console.log(window.history);
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>