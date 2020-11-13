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
                
                <?php
                echo "<select name='fun' id='fun'>";
                $fun = ["uczestnik","organizator","prelegent","obsługa techniczna"];
                foreach($fun as $item){
                    $selected = $item==$toEdit[2] ? "selected": "";
                    echo "<option value='{$item}' {$selected}>{$item}</option>\n";
                }
                echo "</select>\n";
                ?>
                    
            </div>
            <input type="submit" value="Zaktualizuj dane">
        </form>
    </div>
</body>
</html>