#pragma once
#include <string>
#include <iostream>
using namespace std;
class KontaktyDynamiczne
{
public:
	std::string* contacts;
	int size;
	KontaktyDynamiczne(string contacts[],int size) {
		this->contacts = contacts;
	}
	KontaktyDynamiczne() {
		size = 5;
		contacts = new string[size];
		contacts[0] = "Adam";
		contacts[1] = "Monika";
		contacts[2] = "Tomasz";
		contacts[3] = "Roman";
		contacts[4] = "Lucjan";
	}
	KontaktyDynamiczne(const KontaktyDynamiczne& kontakty) {
		size = kontakty.size;
		//contacts = kontakty.contacts;
		contacts = new string[size];
		for (int i=0;i<size;i++) {
			contacts[i] = kontakty.contacts[i];
		}
	}
	~KontaktyDynamiczne();
	friend ostream& operator<<(ostream& os, const KontaktyDynamiczne& kontakty);
};

