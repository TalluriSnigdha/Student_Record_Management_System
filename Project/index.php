<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Record Management System</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>

<div class="d-flex">

    <!-- Sidebar -->

    <div class="sidebar">

        <h3 class="logo">🎓 SRMS</h3>

        <a href="index.html">
            <i class="fa-solid fa-house"></i>
            Dashboard
        </a>

        <a href="pages/student.html">
            <i class="fa-solid fa-user-plus"></i>
            Add Student
        </a>

        <a href="pages/students.html">
            <i class="fa-solid fa-users"></i>
            View Students
        </a>

        <a href="#">
            <i class="fa-solid fa-magnifying-glass"></i>
            Search
        </a>

        <a href="#">
            <i class="fa-solid fa-chart-column"></i>
            Reports
        </a>

        <a href="#">
            <i class="fa-solid fa-gear"></i>
            Settings
        </a>

    </div>

    <!-- Main Content -->

    <div class="main-content">

        <!-- Topbar -->

        <div class="topbar d-flex justify-content-between align-items-center">

            <h2>Dashboard</h2>

            <div>

                <i class="fa-solid fa-bell fs-4 me-4"></i>

                <img src="https://i.pravatar.cc/50"
                     class="rounded-circle"
                     width="45">

            </div>

        </div>

        <!-- Dashboard Cards -->

        <div class="row mt-4">

            <div class="col-md-3">

                <div class="card shadow p-4 text-center">

                    <h2 id="totalStudents">150</h2>

                    <p>Total Students</p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow p-4 text-center">

                    <h2 id="passPercentage">95%</h2>

                    <p>Pass Percentage</p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow p-4 text-center">

                    <h2 id="averageMarks">82%</h2>

                    <p>Average Marks</p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card shadow p-4 text-center">

                    <h2 id="departments">5</h2>

                    <p>Departments</p>

                </div>

            </div>

        </div>

        <!-- Chart -->

        <div class="mt-5">

            <h3 class="mb-4">Student Performance</h3>

            <div class="card shadow p-4">

                <canvas id="studentChart" height="100"></canvas>

            </div>

        </div>

        <!-- Recent Students -->

        <div class="mt-5">

            <h3 class="mb-4">Recent Students</h3>

            <div class="table-responsive">

                <table class="table table-striped table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>Roll No</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Year</th>
                            <th>Marks</th>

                        </tr>

                    </thead>

                    <tbody id="studentTable">

                        <tr>

                            <td>101</td>
                            <td>Snigdha</td>
                            <td>CSE</td>
                            <td>2nd Year</td>
                            <td>95</td>

                        </tr>

                        <tr>

                            <td>102</td>
                            <td>Rahul</td>
                            <td>ECE</td>
                            <td>3rd Year</td>
                            <td>88</td>

                        </tr>

                        <tr>

                            <td>103</td>
                            <td>Priya</td>
                            <td>EEE</td>
                            <td>1st Year</td>
                            <td>91</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <!-- Quick Actions -->

        <div class="mt-5">

            <h3 class="mb-4">Quick Actions</h3>

            <div class="row">

                <div class="col-md-4">

                    <div class="card shadow p-4 text-center">

                        <i class="fa-solid fa-user-plus fa-3x text-success mb-3"></i>

                        <h5>Add Student</h5>

                        <a href="pages/student.html"
                           class="btn btn-success mt-3">

                            Open

                        </a>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card shadow p-4 text-center">

                        <i class="fa-solid fa-users fa-3x text-primary mb-3"></i>

                        <h5>View Students</h5>

                        <a href="pages/students.html"
                           class="btn btn-primary mt-3">

                            Open

                        </a>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card shadow p-4 text-center">

                        <i class="fa-solid fa-chart-column fa-3x text-danger mb-3"></i>

                        <h5>Reports</h5>

                        <a href="#"
                           class="btn btn-danger mt-3">

                            Open

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="js/script.js"></script>

</body>
</html>