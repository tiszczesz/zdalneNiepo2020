<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    

    <link rel="stylesheet" href="cw12.css">
    <title>Ćwiczenie 12 - biblioteka</title>
</head>

<body>
    <h1>Ćwiczenie 12 - biblioteka</h1>
    <?php
    require_once "FileRepoItem.php";
    require_once "FileRepoBook.php";
    require_once "BookToHtml.php";
    $repoItem = new FileRepoItem();
    $repoBook = new FileRepoBook();
    echo BookToHtml::toTable($repoBook->getAllBooks());
    // $dane = $repo->getItems();
    // var_dump($dane);

    //$repoBook->saveAllToFile();
    ?>


    <div >
        <a href="cw12-1.php" class="btn btn-primary p-3">Zobacz jak działa usuwanie itemkó</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>