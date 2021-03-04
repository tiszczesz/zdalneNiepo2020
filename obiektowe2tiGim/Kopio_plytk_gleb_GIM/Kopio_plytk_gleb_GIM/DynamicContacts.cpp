#include "DynamicContacts.h"

ostream& operator<<(ostream& os, const DynamicContacts& conts) {
	os << "Lista kontaktow:" << endl;
	if (conts.size!=0) {
		for (int i = 0; i < conts.size; i++) {
			os << conts.contacts[i] << endl;
		}
	}
	else {
		os << "Brak kontaktow" << endl;
	}
	return os;
}
