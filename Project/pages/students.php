<?php
include("../config/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>View Students</title>

<link rel="stylesheet" href="../css/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<div class="container">

<a class="navbar-brand fw-bold" href="../index.php">

<i class="fa-solid fa-graduation-cap"></i>

Student Record Management

</a>

</div>

</nav>

<div class="container mt-5">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2 class="text-primary">

<i class="fa-solid fa-users"></i>

Student Records

</h2>

<a href="student.php" class="btn btn-success">

<i class="fa-solid fa-user-plus"></i>

Add Student

</a>

</div>

<div class="table-responsive">

<table class="table table-bordered table-hover">

<thead class="table-primary">

<tr>

<th>Roll No</th>
<th>Name</th>
<th>Department</th>
<th>Year</th>
<th>Marks</th>

</tr>

</thead>

<tbody>

<?php

$sql = "SELECT * FROM students ORDER BY id DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        echo "<tr>";

        echo "<td>".$row["roll_no"]."</td>";

        echo "<td>".$row["name"]."</td>";

        echo "<td>".$row["department"]."</td>";

        echo "<td>".$row["year"]."</td>";

        echo "<td>".$row["marks"]."</td>";

        echo "</tr>";

    }

} else {

    echo "<tr><td colspan='5' class='text-center'>No students found.</td></tr>";

}

?>

</tbody>

</table>

</div>

</div>

</body>

</html>