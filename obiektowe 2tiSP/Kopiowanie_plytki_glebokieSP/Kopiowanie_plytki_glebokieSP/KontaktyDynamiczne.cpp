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
KontaktyDynamiczne& KontaktyDynamiczne::operator=(const KontaktyDynamiczne& k) {
	if(this == &k) {
		return *this;
	}
	size = k.size;
	delete[] contacts;
	contacts = nullptr;
	contacts = new string[size];
	for(int i=0;i<size;i++) {
		contacts[i] = k.contacts[i];
	}
	return *this;
}
KontaktyDynamiczne::~KontaktyDynamiczne() {
	cout << "Niszczenie kontaktow.....\n";
	delete[] contacts;
	contacts = nullptr;
}

