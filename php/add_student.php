<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../config/database.php");

echo "PHP is running.<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "POST request received.<br>";

    $roll_no = $_POST["roll_no"];
    $name = $_POST["name"];
    $department = $_POST["department"];
    $year = $_POST["year"];
    $marks = $_POST["marks"];

    $sql = "INSERT INTO students (roll_no, name, department, year, marks)
            VALUES ('$roll_no', '$name', '$department', '$year', '$marks')";

    if ($conn->query($sql) === TRUE) {
        echo "Student inserted successfully.";
    } else {
        die("Database Error: " . $conn->error);
    }

} else {
    echo "Invalid Request";
}
?>