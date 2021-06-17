<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Ćwiczenie 14 CRUD</title>
</head>

<body>
    <div class="container">
        <h1>Edycja pracownika</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="dropdown-item" href="cw14.php">Lista pracowników</a>
            </li>
            <li class="nav-item">
                <a class="dropdown-item" href="addNew.php">Dodaj nowego pracownika</a>
            </li>
            <li class="nav-item">
                <a class="dropdown-item" href="listDiv.php" >Lista działów</a>
            </li>
            <li class="nav-item">
                <a class="dropdown-item" href="addNewDiv.php" >Dodaj nowy dział</a>
            </li>
        </ul>
        
        </nav>
        <?php
        require_once "functions.php";
       //$dane = getAllWorkers();
        //   var_dump($dane);
        if(filter_has_var(INPUT_GET,'id')){
            $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
            if($id){
                $worker = getWorker($id);
            }
         echo workerToForm($worker);
        ?>
    </div>

</body>

</html>