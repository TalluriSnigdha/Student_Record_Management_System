#ifndef STUDENT_H
#define STUDENT_H

#include <iostream>
#include <vector>
#include <fstream>
#include <iomanip>

using namespace std;

struct Student
{
    int rollNo;
    string name;
    string department;
    int age;
    float marks;
};

extern vector<Student> students;

void addStudent();
void displayStudents();
void searchStudent();
void updateStudent();
void deleteStudent();
void sortByMarks();
void sortByRollNo();
void saveToFile();
void loadFromFile();

#endif