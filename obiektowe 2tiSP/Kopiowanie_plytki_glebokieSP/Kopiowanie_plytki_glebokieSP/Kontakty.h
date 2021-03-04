#pragma once
#include <vector>
#include <iostream>
#include <string>
using namespace std;
class Kontakty
{
public:
	vector<string> contacts;
	Kontakty(vector<string>& contacts ) {
		this->contacts = contacts;
	}
	Kontakty(){}
	friend ostream& operator<<(ostream& os, const Kontakty& kontakty);
};

