#include "Person.h"

Person::Person()
{
   firstName = "Adam";
   lastName = "Nowak";
   age = 20;
}
Person::Person(string firstName,string lastName,int age){
    this->firstName = firstName;
    this->lastName = lastName;
    SetAge(age);
}
void Person::Info(){
    cout << " --------------- Informacja o osobie --------------------\n";
    cout << "      Imie: " << firstName<<endl;
    cout << "  Nazwisko: " << lastName<<endl;
    cout << "      Wiek: " << age<<endl;

}
ostream& operator<<(ostream& os, const Person& p){
      os << " --------------- Informacja o osobie --------------------\n";
    os << "      Imie: " << p.firstName<<endl;
    os << "  Nazwisko: " << p.lastName<<endl;
    os << "      Wiek: " << p.age<<endl;
    return os;
}

Person::~Person()
{
    //dtor
}
