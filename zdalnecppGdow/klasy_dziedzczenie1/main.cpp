#include <iostream>
#include "Person.h"
#include "Worker.h"
using namespace std;
void cw1();
void cw2();
int main()
{
   //cw1();
   cw2();
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
