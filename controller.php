<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$queryMedie = "SELECT class, ROUND(AVG(grade), 2) AS medie FROM grades JOIN students ON grades.student_id = students.student_id GROUP BY class;";
$resultMedieClase = $conn->query($queryMedie);

$queryMedieGenerala = "SELECT ROUND(AVG(grade), 2) AS medieGenerala FROM grades";
$resultMedieGenerala = $conn->query($queryMedieGenerala);

$queryAbsente = "SELECT students.student_id, students.name AS name, COUNT(absences.absence) AS nr FROM students LEFT JOIN absences ON students.student_id = absences.student_id GROUP BY students.student_id, students.name ORDER BY nr DESC LIMIT 1;";
$resultAbsente = $conn->query($queryAbsente);

$queryTop = "SELECT students.name AS name, ROUND(AVG(grades.grade), 2) AS medie FROM students JOIN grades ON students.student_id = grades.student_id GROUP BY students.student_id ORDER BY medie DESC LIMIT 3;";
$resultTop = $conn->query($queryTop);
?>
