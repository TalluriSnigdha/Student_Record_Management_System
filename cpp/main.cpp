#include "student.h"

using namespace std;

int main()
{
    loadFromFile();

    int choice;

    do
    {
        cout << "\n=========================================\n";
        cout << "   STUDENT RECORD MANAGEMENT SYSTEM\n";
        cout << "=========================================\n";
        cout << "1. Add Student\n";
        cout << "2. Display Students\n";
        cout << "3. Search Student\n";
        cout << "4. Update Student\n";
        cout << "5. Delete Student\n";
        cout << "6. Sort by Marks\n";
        cout << "7. Sort by Roll Number\n";
        cout << "8. Save Records\n";
        cout << "9. Exit\n";
        cout << "Enter your choice: ";
        cin >> choice;

        switch (choice)
        {
        case 1:
            addStudent();
            break;

        case 2:
            displayStudents();
            break;

        case 3:
            searchStudent();
            break;

        case 4:
            updateStudent();
            break;

        case 5:
            deleteStudent();
            break;

        case 6:
            sortByMarks();
            break;

        case 7:
            sortByRollNo();
            break;

        case 8:
            saveToFile();
            cout << "\nRecords saved successfully!\n";
            break;

        case 9:
            saveToFile();
            cout << "\nThank you!\n";
            break;

        default:
            cout << "\nInvalid choice!\n";
        }

    } while (choice != 9);

    return 0;
}