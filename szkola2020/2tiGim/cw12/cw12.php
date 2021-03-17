<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw12.css">
    <title>Ćwiczenie 12 - biblioteka</title>
</head>
<body>
    <h1>Ćwiczenie 12 - biblioteka</h1>
    <?php
      require_once "FileRepoItem.php";
      require_once "FileRepoBook.php";
      $repoItem = new FileRepoItem();
      $repoBook = new FileRepoBook();
     // $dane = $repo->getItems();
     // var_dump($dane);
     $b1 = new Book();
     $b2 = new Book("","Wasyl Potocki",450,34.99,"AbC c++");
     echo $b1->toJSON();
     $date = $b2->toJSON();
     
     $repoBook->saveBook($b1);
     $repoBook->saveBook($b2);
    ?>
</body>
</html>