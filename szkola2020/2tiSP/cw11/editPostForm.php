<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw11.css">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "PostRepo.php";
    require_once "PostToHtml.php";
    if(filter_has_var(INPUT_GET,'title')){
        $title = trim(filter_input(INPUT_GET,'title',FILTER_SANITIZE_STRING));
        $post = PostRepo::getPostByTitle($title);
        echo PostToHtml::postToForm($post);
        //todo  sprawdzic
    }else{
        echo "Upppsss!!! brak nazwy pliku";
    }
    ?>
</body>
</html>