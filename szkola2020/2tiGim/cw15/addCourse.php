<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw15.css">
    <title>dodaj kurs</title>
</head>

<body>
    <div class="container">
    <nav>
            <ul>
                <li><a href="courses.php">zobacz kursy</a></li>
                <li><a href="cw15.php">lista studentów</a></li>
                <li><a href="addCourse.php">dodaj kurs</a></li>
                <li><a href="addStudent.php">dodaj studenta</a></li>
            </ul>
        </nav>
        <h1>Dodawanie nowego kursy</h1>
        <form action="addNewCourse.php" method="post">
            <div class="line">
                <label for="name">Nazwa kursu</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="line">
                <label for="date">Data rozpoczęcia</label>
                <input type="date" name="date" id="date">
            </div>
            <div class="line">
                <input type="submit" value="Zapisz">
            </div>
        </form>
    </div>
</body>

</html>