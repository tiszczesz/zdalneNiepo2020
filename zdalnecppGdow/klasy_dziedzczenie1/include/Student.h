#ifndef STUDENT_H
#define STUDENT_H

#include <Person.h>


class Student : public Person
{
    public:
        Student();
        Student(string firstName,string lastName,int age,double avg=4.0);
        double Getavg() { return avg; }
        void Setavg(double val) { avg = val; }
        friend ostream& operator<<(ostream& os, const Student& s);
        void Info();
    protected:

    private:
        double avg;
};

#endif // STUDENT_H
