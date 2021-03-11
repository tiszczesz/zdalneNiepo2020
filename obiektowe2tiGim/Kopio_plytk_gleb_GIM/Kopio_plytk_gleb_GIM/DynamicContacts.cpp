#include "DynamicContacts.h"
#include <algorithm>

ostream& operator<<(ostream& os, const DynamicContacts& conts) {
	os << "Lista kontaktow:" << endl;
	//int a = 7 >> 2;
	//cout << " a = " << a << endl;
	if (conts.size!=0) {
		for (int i = 0; i < conts.size; i++) {
			os << "\t\t" << conts.contacts[i] << endl;
		}
	}
	else {
		os << "Brak kontaktow" << endl;
	}
	return os;
}
DynamicContacts& DynamicContacts::operator=(const DynamicContacts& dc) {
	if (this == &dc) return *this;
	size = dc.size;
	//contacts = dc.contacts;
	delete[] contacts;
	contacts = nullptr;
	contacts = new string[size];
	std::copy(dc.contacts, dc.contacts + size, contacts);
	/*for(int i=0;i<size;i++) {
		contacts[i] = dc.contacts[i];
	}*/
	return *this;
}
