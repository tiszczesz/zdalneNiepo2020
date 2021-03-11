#pragma once
#include <iostream>
#include <string>
using namespace std;
class DynamicContacts
{
public:
	std::string* contacts;
	int size;

	DynamicContacts() {
		size = 3;
		contacts = new string[size]{ "Roman" ,"Tymon","Teresa" };
		/*contacts[0] = "Roman";
		contacts[1] = "Tymon";
		contacts[2] = "Teresa";*/
	}
	DynamicContacts(string contacts[],int size) {
		this->size = size;
		this->contacts = contacts;
	}
	DynamicContacts(const DynamicContacts& dc) {
		size = dc.size;
		//contacts = dc.contacts;
		contacts = new string[size];
		for(int i=0;i<size;i++) {
			contacts[i] = dc.contacts[i];
		}
	}
	friend ostream& operator<<(ostream& os, const DynamicContacts& contacts);
	~DynamicContacts() {
		cout << "Niszczenie dynamicznej listy kontaktow \n";
		delete[] contacts;
		contacts = nullptr;
	}
};

