<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testujemy usuwanie</title>
</head>
<body>
    <h1>Testujemy usuwanie</h1>
    <?php
    require_once "FileRepoItem.php";

    $repo = new FileRepoItem();

    $items = &$repo->getItems();
    var_dump($items);
   // $repo->deleteItem($items[0]);
   // $repo->saveAllToFile();
   // echo "<p>Po usunieciu</p>";
    $newItem = new Item("rrr item");
    $repo->saveItem($newItem);
    var_dump($repo->getItems());
?>
</body>
</html>