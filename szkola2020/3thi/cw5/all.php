<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dziennik - preglądanie</title>
    <link rel="stylesheet" href="cw5.css">
</head>

<body>
    <div>
    <?php
    require "functions.php";
    $dane = getAllFromFile("info.txt");
   // var_dump($dane);
    echo toTable($dane);
    ?>
    </div>
    <div>
        <?php
    $topics = getAllTopic("przedmioty.txt");
    echo topicToSelect($topics);
        ?>
    </div>
</body>

</html>