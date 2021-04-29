<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="cw14.css">
    <title>Document</title>
</head>
<body>
  <?php
require_once "functions.php";
  ?>
    <div class="container">
      <h1>Dodawanie nowego pracownika</h1>
        <form action="addNewResult.php" method="POST">
            <div class="form-row m-3">
              <label for="imie">Imię: </label>
              <input type="text" name="imie" id="imie" class="form-control" >              
            </div>
            <div class="form-row m-3">
                <label for="nazwisko">Nazwisko: </label>
                <input type="text" name="nazwisko" id="nazwisko" class="form-control" >              
              </div>
              <div class="form-row">
                <label for="imie">Dział: </label>
                <?php echo getSelect()?>              
              </div>
              <div class="form-row m-3">
               
                <input type="submit" class="btn btn-primary w-100" value="Zapisz">
              </div>
              
        </form>
    </div>
</body>
</html>