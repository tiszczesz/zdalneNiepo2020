<?php
function &getConnection(): ?mysqli {
    $conn = new mysqli("localhost","root",null,"2tipgim_cw3");
    if($conn->connect_errno!=0) return null;
    $conn->set_charset("utf8");
    return $conn;
}

function &getAllStudents():array {
    $conn = getConnection();
    if($conn == null) return [];
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    $students = [];
    if($result){
        while($row = $result->fetch_array()){
            $students[] = $row;
        }
    }
    $conn->close();
    return $students;
}
function &getAllCourses():array {
    $conn = getConnection();
    if($conn == null) return [];
    $sql = "SELECT * FROM course";
    $result = $conn->query($sql);
    $courses = [];
    if($result){
        while($row = $result->fetch_array()){
            $courses[] = $row;
        }
    }
    $conn->close();
    return $courses;
}
function coursesToTable(array $courses):string {
    $html = "<table><tr><th>Lp</th><th>Nazwa</th><th>Data rozpoczęcia</th><th>---</th></tr>";
    $lp=0;
    foreach($courses as $row){
        $lp++;
        $html .= "<tr><td>{$lp}</td><td>{$row[1]}</td>"
                ."<td>{$row[2]}</td><td>TODO</td></tr>";
    }
    return $html."</table>";
}
function studentsToTable(array $students):string {
    $html = "<table><tr><th>Lp</th><th>Imię</th><th>Nazwisko</th><th>---</th></tr>";
    $lp=0;
    foreach($students as $row){
        $lp++;
        $html .= "<tr><td>{$lp}</td><td>{$row[1]}</td>"
                ."<td>{$row[2]}</td><td>TODO</td></tr>";
    }
    return $html."</table>";
}