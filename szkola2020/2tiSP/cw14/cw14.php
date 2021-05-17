<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="cw14.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1><span class="badge bg-secondary  p-3 w-100">Zbiór książek</span></h1>
    <a class="btn btn-info" href="addNewBook.html">Dodaj książkę</a>
    <?php
    require "functions.php";
    $books = getAllBooks();
    //var_dump($books);
    echo booksToTable($books);
    ?>

    </div>
    
</body>
</html>