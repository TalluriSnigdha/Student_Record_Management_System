// =============================
// Student Record Management
// =============================

// Get existing students or create an empty array
let students = JSON.parse(localStorage.getItem("students")) || [];

// Save form data
const form = document.getElementById("studentForm");

if (form) {

    form.addEventListener("submit", function (e) {

        e.preventDefault();

        const student = {

            name: document.getElementById("name").value,
            roll: document.getElementById("roll").value,
            department: document.getElementById("department").value,
            year: document.getElementById("year").value,
            email: document.getElementById("email").value,
            phone: document.getElementById("phone").value,
            marks: document.getElementById("marks").value

        };

        students.push(student);

        localStorage.setItem("students", JSON.stringify(students));

        alert("Student Added Successfully!");

        form.reset();

    });

}

const totalStudents = document.getElementById("totalStudents");
const dashboardTable = document.getElementById("dashboardTable");

if (totalStudents && dashboardTable) {

    let students = JSON.parse(localStorage.getItem("students")) || [];

    totalStudents.textContent = students.length;

    students.slice(-5).reverse().forEach(student => {

        dashboardTable.innerHTML += `
        <tr>
            <td>${student.roll}</td>
            <td>${student.name}</td>
            <td>${student.department}</td>
            <td>${student.year}</td>
            <td>${student.marks}</td>
        </tr>
        `;

    });

}