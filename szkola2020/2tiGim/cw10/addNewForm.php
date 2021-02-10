<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw10.css">
    <title>Document</title>
</head>

<body>
    <h1>Dodawanie nowego artykułu</h1>
    <div>
        <form action="addNew.php" method="post">
            <div class="line"><label for="title"> Podaj tytuł:  </label> 
                <input type="text" id="title" name="title">
            </div>
            <div class="line">
                <label class="label-textarea" for="content">Treść artykułu: </label>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <div class="line"><input type="submit" value="Zapisz"></div>
        </form>
    </div>
</body>

</html>