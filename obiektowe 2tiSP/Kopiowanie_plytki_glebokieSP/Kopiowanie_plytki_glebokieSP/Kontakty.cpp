#include "Kontakty.h"

ostream& operator<<(ostream& os, const Kontakty& kontakty) {
	os << "Zbior kontaktow" << endl;
	if (kontakty.contacts.size() == 0) os << "brak kontaktow" << endl;
	else {
		for (auto c : kontakty.contacts) {
			os << c << endl;
		}
	}
	return os;
}
