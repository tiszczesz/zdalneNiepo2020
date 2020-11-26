#include "DocText.h"
#include <iostream>

DocText::DocText(string name, int size, vector<string> lines):Document(name,size) {
	cout << "Konstruktor z argumentami DocText" << endl;
	this->lines = lines;
}
DocText::DocText() {
	cout << "Konstruktor domyslny DocText" << endl;
}
void DocText::Info() {
	cout << " --------- Informacja o dokumencie tekstowym ---------------\n";
	Document::Info();
	cout << " ----- Zawartosc dokumentu tekstowego --------\n";
	for (auto line : lines) {
		cout <<"\t\t" <<line << endl;
	}
}

