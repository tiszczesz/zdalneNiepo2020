#pragma once
#include <string>

class Person
{
private:
	std::string firstName;
	std::string lastName;
	int age;

public:
	Person() {
		firstName = "noname";
		lastName = "noname";
		age = 20;
	}
	Person(std::string firstName,std::string lastName, int age = 20) {
		this->firstName = firstName;
		this->lastName = lastName;
		this->age = age;
	}
	friend std::ostream& operator<<(std::ostream& os, const Person& p);
};

