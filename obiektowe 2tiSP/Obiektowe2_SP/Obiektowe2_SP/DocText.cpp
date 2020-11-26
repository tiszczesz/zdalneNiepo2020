#include "DocText.h"

#include <iostream>

DocText::DocText(string name, int size, vector<string> content):Document(name,size) {
	this->content = content;
	cout << "Konstruktor z argumentami klasy DocText" << endl;
}
DocText::DocText() {
	cout << "Konstruktor domyslny klasy DocText" << endl;
}
void DocText::Info() {
	cout << " ============ Info o dokumencie tekstowym ================\n";
	Document::Info();
	cout << "Zawartosc dokumentu tekstowego:" << endl;
	for (auto line : content) {
		cout << line << endl;
	}
	cout << " ====== koniec zawartosci pliku tekstowego ============\n";
	cout << " Statystyki dokumentu tekstowego:" << endl;
	cout << "Ilosc lini: " << getLines() << endl;
	cout << "Ilosc znakow: " << 2 /*todo*/ << endl;
	cout << "Ilosc liter: " << 2  /*todo*/ << endl;
}


