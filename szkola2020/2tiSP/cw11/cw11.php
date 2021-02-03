<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw11.css">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "PostToHtml.php";
    require_once "PostRepo.php";
    $posts = [
        new Post("Pieszy post","The placement of the closing identifier is important. Prior to PHP 7.3 it had to always be placed on a new line followed by a semi-colon and with no white-space in front of it. So all the examples above would be valid. However, as of PHP 7.3 these rules have been relaxed a little."),
        new Post("Drugi post","The placement of the closing identifier is important. Prior to PHP 7.3 it had to always be placed on a new line followed by a semi-colon and with no white-space in front of it. So all the examples above would be valid. However, as of PHP 7.3 these rules have been relaxed a little."),
        new Post("Trzeci post","The placement of the closing identifier is important. Prior to PHP 7.3 it had to always be placed on a new line followed by a semi-colon and with no white-space in front of it. So all the examples above would be valid. However, as of PHP 7.3 these rules have been relaxed a little."),
        new Post("Inny post","The placement of the closing identifier is important. Prior to PHP 7.3 it had to always be placed on a new line followed by .",""
                ,"news","border: solid red 1px"),
    ];
   // var_dump($posts);
    foreach($posts as $p){
       echo PostToHtml::postToDiv($p);
    }
    var_dump(PostRepo::getAllPosts());
    ?>
</body>
</html>