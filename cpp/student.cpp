#include "student.h"

vector<Student> students;

void addStudent()
{
    Student s;

    cout << "\nEnter Roll Number: ";
    cin >> s.rollNo;

    cin.ignore();

    cout << "Enter Name: ";
    getline(cin, s.name);

    cout << "Enter Department: ";
    getline(cin, s.department);

    cout << "Enter Age: ";
    cin >> s.age;

    cout << "Enter Marks: ";
    cin >> s.marks;

    students.push_back(s);

    cout << "\nStudent added successfully!\n";
}

void displayStudents()
{
    if (students.empty())
    {
        cout << "\nNo records found.\n";
        return;
    }

    cout << "\n---------------------------------------------------------------\n";
    cout << left << setw(10) << "Roll"
         << setw(20) << "Name"
         << setw(15) << "Department"
         << setw(10) << "Age"
         << setw(10) << "Marks" << endl;

    cout << "---------------------------------------------------------------\n";

    for (const auto &s : students)
    {
        cout << left << setw(10) << s.rollNo
             << setw(20) << s.name
             << setw(15) << s.department
             << setw(10) << s.age
             << setw(10) << s.marks << endl;
    }
}

void searchStudent()
{
    int roll;
    cout << "\nEnter Roll Number: ";
    cin >> roll;

    for (const auto &s : students)
    {
        if (s.rollNo == roll)
        {
            cout << "\nStudent Found\n";
            cout << "Name: " << s.name << endl;
            cout << "Department: " << s.department << endl;
            cout << "Age: " << s.age << endl;
            cout << "Marks: " << s.marks << endl;
            return;
        }
    }

    cout << "\nStudent not found.\n";
}

void updateStudent()
{
    int roll;
    cout << "\nEnter Roll Number: ";
    cin >> roll;

    for (auto &s : students)
    {
        if (s.rollNo == roll)
        {
            cin.ignore();

            cout << "New Name: ";
            getline(cin, s.name);

            cout << "New Department: ";
            getline(cin, s.department);

            cout << "New Age: ";
            cin >> s.age;

            cout << "New Marks: ";
            cin >> s.marks;

            cout << "\nRecord updated.\n";
            return;
        }
    }

    cout << "\nStudent not found.\n";
}

void deleteStudent()
{
    int roll;
    cout << "\nEnter Roll Number: ";
    cin >> roll;

    for (auto it = students.begin(); it != students.end(); it++)
    {
        if (it->rollNo == roll)
        {
            students.erase(it);
            cout << "\nStudent deleted.\n";
            return;
        }
    }

    cout << "\nStudent not found.\n";
}

void sortByMarks()
{
    for (int i = 0; i < students.size() - 1; i++)
    {
        for (int j = 0; j < students.size() - i - 1; j++)
        {
            if (students[j].marks < students[j + 1].marks)
            {
                swap(students[j], students[j + 1]);
            }
        }
    }

    cout << "\nSorted by Marks.\n";
}

void sortByRollNo()
{
    for (int i = 0; i < students.size() - 1; i++)
    {
        for (int j = 0; j < students.size() - i - 1; j++)
        {
            if (students[j].rollNo > students[j + 1].rollNo)
            {
                swap(students[j], students[j + 1]);
            }
        }
    }

    cout << "\nSorted by Roll Number.\n";
}

void saveToFile()
{
    ofstream file("students.txt");

    for (const auto &s : students)
    {
        file << s.rollNo << endl;
        file << s.name << endl;
        file << s.department << endl;
        file << s.age << endl;
        file << s.marks << endl;
    }

    file.close();
}

void loadFromFile()
{
    ifstream file("students.txt");

    if (!file)
        return;

    Student s;

    while (file >> s.rollNo)
    {
        file.ignore();

        getline(file, s.name);
        getline(file, s.department);

        file >> s.age;
        file >> s.marks;

        file.ignore();

        students.push_back(s);
    }

    file.close();
}