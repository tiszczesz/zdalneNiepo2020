<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw15.css">
    <title>Lista studentów</title>
</head>

<body>
    <div class="container">
        <h1>Lista studentów</h1>
        <nav>
            <ul>
                <li><a href="courses.php">zobacz kursy</a></li>
                <li><a href="cw15.php">lista studentów</a></li>
                <li><a href="addCourse.php">dodaj kurs</a></li>
                <li><a href="addStudent.php">dodaj studenta</a></li>
            </ul>
        </nav>
        <div>
            <?php
            require_once "functions.php";
            $students = getAllStudents();
            echo studentsToTable($students);
            ?>
        </div>
    </div>
</body>

</html>