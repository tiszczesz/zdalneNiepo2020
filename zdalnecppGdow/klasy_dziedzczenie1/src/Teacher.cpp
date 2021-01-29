#include "Teacher.h"

Teacher::Teacher():Person()
{
    topics = {"matemstyka","fizyka"};
}
Teacher::Teacher(string firstName,string lastName,int age,vector<string>& topics)
:Person(firstName,lastName,age)
{
    this->topics = topics;
}
void Teacher::Info(){
    Person::Info();
    cout << "Nauczane przedmioty: ";
    for(string t : topics){
        cout << t << ", ";
    }
    cout << endl;
}
