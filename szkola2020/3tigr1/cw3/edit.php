<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj dane uczestnika</title>
    <link rel="stylesheet" href="cw3.css">
</head>
<body>
    <h1>Edytuj dane uczestnika</h1>
    <?php
        if(!isset($_GET['id'])){
            header("Location: admin.php");
            //die();
        }
        $id = intval($_GET['id']);
        $lines = file("rejestracja.txt",FILE_IGNORE_NEW_LINES);
        $dane = [];
        foreach($lines as $line){
            $dane[] = explode('|',$line);
        }
        $toEdit = $dane[$id];
?>

    <div>
        <form method="post" action="postEdit.php">
            <div class="line">
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <label for="login">Podaj login: </label>
                <input type="text" name="login" id="login" value='<?php echo $toEdit[0];?>'>
            </div>
            <div class="line">
            <label for="data">Podaj data: </label>
                <input type="date" name="data" id="data" value='<?php echo $toEdit[1];?>'>
            </div>
            <div class="line">
                <label for="funkcja">Wybierz fukcję: </label><br>
                <select name="fun" id="fun">
                    <option value="uczestnik">uczestnik</option>
                    <option value="organizator">organizator</option>
                    <option value="prelegent">prelegent</option>
                    <option value="obsługa techniczna">obsługa techniczna</option>
                </select>
            </div>
            <input type="submit" value="Zarejestruj na konferencję">
        </form>
    </div>
</body>
</html>