#pragma once
#include <vector>
#include <string>

using namespace std;
class Contacts
{
public:
	vector<string> contacts;

	Contacts() {
		
	}
	friend ostream& operator<<(ostream& os, const Contacts& contacts);
};

