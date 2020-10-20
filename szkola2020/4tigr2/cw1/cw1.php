<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licznik</title>
</head>
<body>
    <h1>H1ggg g gggg</h1>
    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Facilis aperiam omnis quasi. Possimus corrupti excepturi ut atque odio, in reiciendis, 
        consectetur quaerat magnam amet nam eos minus totam repudiandae hic!</div>
        <div id="footer">ilość odwiedzin stron: 
            <?php
            $f = fopen("dane.txt",'r');
            $licznik = 0;
            if($f){
                $licznik  = fgets($f);
                echo $licznik;
                fclose($f);
            }
            $licznik++;
            $f = fopen("dane.txt",'w');
            if($f){
                fwrite($f,$licznik);
                fclose($f);
            }
              ?>
        </div>
</body>
</html>