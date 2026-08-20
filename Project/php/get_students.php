<?php

include("../config/database.php");

$sql = "SELECT * FROM students ORDER BY id DESC";

$result = $conn->query($sql);

$students = array();

while ($row = $result->fetch_assoc()) {
    $students[] = $row;
}

echo json_encode($students);

$conn->close();

?>