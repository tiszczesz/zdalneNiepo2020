#include "KontaktyDynamiczne.h"

ostream& operator<<(ostream& os, const KontaktyDynamiczne& kontakty) {
	os << "Zbior kontaktow" << endl;
	if (kontakty.size == 0) os << "brak kontaktow" << endl;
	else {
		for (auto i = 0; i < kontakty.size;i++) {
			os << "\t\t"<< kontakty.contacts[i] << endl;
		}
	}
	return os;
}
KontaktyDynamiczne::~KontaktyDynamiczne() {
	cout << "Niszczenie kontaktow.....\n";
	delete[] contacts;
	contacts = nullptr;
}

