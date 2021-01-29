#ifndef TEACHER_H
#define TEACHER_H

#include <Person.h>
#include <vector>

class Teacher : public Person
{
    public:
        Teacher();
        Teacher(string firstName,string lastName,int age,vector<string>& topics);
        void Info();
    protected:

    private:
        std::vector<std::string> topics;
};

#endif // TEACHER_H
