#include "Worker.h"

Worker::Worker() : Person()
{
    SetSalary(3000.00);
}
Worker::Worker(string firstName,string lastName,int age,double salary)
:Person(firstName,lastName,age)
{
    SetSalary(salary);
}
void Worker::SetSalary(double salary){
    this->salary = salary<0 ? -salary : salary;
}
ostream& operator<<(ostream& os,const Worker& w){
       os << " --------------- Informacja o pracowniku --------------------\n";
    os << "      Imie: " << w.firstName<<endl;
    os << "  Nazwisko: " << w.lastName<<endl;
    os << "      Wiek: " << w.age<<endl;
    os << "    Pensja:"  << w.salary<<endl;
    return os;
}
void Worker::Info(){
    Person::Info();
    cout << "    Pensja:"  << salary<<endl;
}
