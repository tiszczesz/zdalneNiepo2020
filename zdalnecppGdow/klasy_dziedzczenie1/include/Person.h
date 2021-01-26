#ifndef PERSON_H
#define PERSON_H
#include <string>
#include <iostram>
using namespace std;
class Person
{
    public:
        Person();
        Person(string firstName,string lastName,int age);
        virtual ~Person();
        void Info();
        friend ostream& operator<<(ostream& os, const Person& p);
    protected:
        string firstName;
        string lastName;
        int age;


};

#endif // PERSON_H
