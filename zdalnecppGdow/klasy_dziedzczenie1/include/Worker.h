#ifndef WORKER_H
#define WORKER_H
#include "Person.h"

class Worker : public Person
{
    public:
        Worker();
        Worker(string firstName,string lastName,int age,double salary);
        void Info();//nadpisanie metody z klasy bazowej
        friend ostream& operator<<(ostream& os,const Worker& w);
        void SetSalary(double salary);
    protected:

    private:
        double salary;
};

#endif // WORKER_H
