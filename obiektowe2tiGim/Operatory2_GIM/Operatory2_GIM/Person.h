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
		firstName = "Noname";
		lastName = "Noname";
		age = 20;
	}
	Person(std::string firstName,std::string lastName, int age = 20) {
		this->firstName = firstName;
		this->lastName = lastName;
		this->age = age;
	}
	friend std::ostream& operator<<(std::ostream& os, const Person& p);

	bool operator<(const Person& p) {
		return lastName < p.lastName;
	}
	bool operator>(const Person& p) {
		return lastName > p.lastName;
	}
};

