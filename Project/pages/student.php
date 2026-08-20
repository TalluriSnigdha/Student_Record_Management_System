<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Student</title>

    <link rel="stylesheet" href="../css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>

<div class="container mt-5">

    <div class="card shadow p-5">

        <h2 class="mb-4 text-center">Add New Student</h2>

        <form action="../php/add_student.php" method="POST">

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>Name</label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Roll Number</label>

                    <input
                        type="text"
                        id="roll"
                        name="roll_no"
                        class="form-control"
                        required>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Department</label>

                    <select id="department" name="department" class="form-select">

                        <option>CSE</option>
                        <option>ECE</option>
                        <option>EEE</option>
                        <option>IT</option>
                        <option>MECH</option>

                    </select>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Year</label>

                    <select id="year" name="year" class="form-select">

                        <option>1st Year</option>
                        <option>2nd Year</option>
                        <option>3rd Year</option>
                        <option>4th Year</option>

                    </select>

                </div>

                <div class="col-md-6 mb-3">

                    <label>Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Phone</label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        class="form-control">

                </div>

                <div class="col-md-6 mb-4">

                    <label>Marks</label>

                    <input
                        type="number"
                        id="marks"
                        name="marks"
                        class="form-control">

                </div>

            </div>

            <button
                type="submit"
                class="btn btn-success">

                Add Student

            </button>

            <a
                href="../index.php"
                class="btn btn-secondary">

                Dashboard

            </a>

        </form>

    </div>

</div>

<script src="../js/script.js"></script>

</body>

</html>