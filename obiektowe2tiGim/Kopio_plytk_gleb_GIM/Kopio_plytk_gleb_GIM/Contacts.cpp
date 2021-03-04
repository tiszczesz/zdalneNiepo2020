#include "Contacts.h"

#include <ostream>

ostream& operator<<(ostream& os, const Contacts& conts) {
	os << "Lista kontaktow:" << endl;
	if(!conts.contacts.empty()) {
		for (int i = 0; i < conts.contacts.size();i++) {
			os << conts.contacts[i] << endl;
		}
	}else {
		os << "Brak kontaktow" << endl;
	}
	return os;
}
