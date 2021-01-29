#include "Student.h"

Student::Student():Person()
{
    this->avg = 4.0;
}
Student::Student(string firstName,string lastName,int age,double avg):Person(firstName,lastName,age)
{
    this->avg =avg;
}
ostream& operator<<(ostream& os, const Student& s){
       os << " --------------- Informacja o studencie --------------------\n";
    os << "         Imie: " << s.firstName<<endl;
    os << "     Nazwisko: " << s.lastName<<endl;
    os << "         Wiek: " << s.age<<endl;
    os << " Srednia ocen: "  << s.avg<<endl;
    return os;
}
void Student::Info(){
    Person::Info();
     cout << "    Srednia ocen:"  << avg<<endl;
}

