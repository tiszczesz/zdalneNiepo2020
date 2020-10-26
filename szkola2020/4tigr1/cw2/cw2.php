<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload plików</title>
</head>

<body>
    <h1>Wysyłanie plików na serwer</h1>
    <div>
        <form action="uploadFile.php" method="post" enctype="multipart/form-data">
            <label for="plik">wybierz plik: </label>
            <input type="file" name="plik" id="plik">
            <input type="submit" value="Zapisz plik">
        </form>
    </div>
</body>

</html>