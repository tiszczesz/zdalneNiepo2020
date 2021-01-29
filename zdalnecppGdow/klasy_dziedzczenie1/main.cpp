#include <iostream>
#include "Person.h"
#include "Worker.h"
#include "Student.h"
#include "Teacher.h"
#include <vector>
using namespace std;
void cw1();
void cw2();
void cw3();
void cw4();
int main()
{
   //cw1();
   //cw2();
   //cw3();
   cw4();
    return 0;
}
void cw1(){
    Person p1("Danuta","Malicka",21);
    Person* pp2 = new Person("Franek","Balicki",-55);//dynamicznie utworzony obiekt
    p1.Info();
    pp2->Info();
    cout << p1 << endl;
    cout << (*pp2) << endl;
    delete pp2;
    pp2 = nullptr;
}
void cw2(){
    Worker w1;
    w1.Info();
    cout << w1 << endl;
}
void cw3(){
    Student s1("Reneta","Toron",15,5.2);
    s1.Info();
    cout << s1 << endl;
}
void cw4(){
    vector<string> t1 {"jezyk polski","historia"};
    vector<string> t2 {"jezyk angielski","wf"};
    vector<Person*> dane;
    dane.push_back(new Person("Antoni","Turek",23));
    dane.push_back(new Student());
    dane.push_back(new Student("Halina","Gora",19,3.5));
    dane.push_back(new Student("Tomasz","Bomasz",22,4.1));
    dane.push_back(new Worker());
    dane.push_back(new Worker("Monika","Wrona",22,4500));
    dane.push_back(new Worker("Roman","Gryk",22,3800));
    dane.push_back(new Teacher());
    dane.push_back(new Teacher("Teresa","Rak",34,t1));
    dane.push_back(new Teacher("Grazyna","Sprezyna",54,t2));
    for(auto p : dane ){
        p->Info();
    }
    for(auto p : dane){
        delete p;
        p = nullptr;
    }
    dane.clear();
}
