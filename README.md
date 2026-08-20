# Student Record Management System

## Student Record Management Using DSA Concepts

A web-based Student Record Management System developed as an academic project. The system is designed to manage student information efficiently and provides basic operations such as adding, viewing, searching, deleting records, and generating student reports.

## Project Objective

The main objective of this project is to develop a simple and user-friendly system for managing student records while applying Data Structures and Algorithms concepts in a practical application.

The system reduces manual record management and provides a structured way to store and retrieve student information.

## Features

- Add new student records
- View all student records
- Search students by name, roll number, or department
- Delete student records
- Generate student performance reports
- Display total number of students
- Calculate average marks
- Find highest marks
- Find lowest marks
- User-friendly dashboard
- Light/Dark theme support

## Technologies Used

### Frontend
- HTML
- CSS
- Bootstrap
- Font Awesome

### Backend
- PHP

### Database
- MySQL

### Development Environment
- XAMPP
- Visual Studio Code
- phpMyAdmin

## DSA Concepts Used

The project demonstrates the practical use of Data Structures and Algorithms concepts such as:

- Searching
- Linear traversal
- Sorting concepts
- Arrays and records
- Data organization
- Time complexity analysis

The student records are processed through searching, traversal, insertion, deletion, and retrieval operations.

## Database

Database Name:

`srms`

Main Table:

`students`

The students table stores information such as:

- ID
- Roll Number
- Name
- Department
- Year
- Marks

## System Operations

### 1. Add Student

The user can enter student details such as roll number, name, department, year, and marks.

### 2. View Students

All stored student records are displayed in a structured table.

### 3. Search Student

The search feature allows users to find records using:

- Student name
- Roll number
- Department

### 4. Delete Student

A selected student record can be removed from the database.

### 5. Student Reports

The report section calculates:

- Total students
- Average marks
- Highest marks
- Lowest marks

## Project Structure

```text
Student-Record-Management/
│
├── index.php
│
├── css/
│   └── style.css
│
├── js/
│   └── script.js
│
├── pages/
│   ├── student.php
│   ├── students.php
│   ├── reports.php
│   ├── search.php
│   └── settings.php
│
├── php/
│   ├── add_student.php
│   └── delete_student.php
│
├── config/
│   └── database.php
│
├── database/
│   └── srms.sql
│
└── README.md
