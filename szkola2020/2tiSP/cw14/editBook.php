<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Edycja książki</title>
</head>
<body>
<div class="container">
       <h1 class="text-center border-bottom">Dodaj nową książkę</h1>
        <?php
require_once "functions.php";
if(filter_has_var(INPUT_GET,'id')){
    $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
    $b = getBookById( $id);
    //var_dump($b);

    echo "<p>Edycja ksiażki o id: {$id}</p>";
    echo bookToForm($b);

}
?>
    </div>

</body>
</html>
