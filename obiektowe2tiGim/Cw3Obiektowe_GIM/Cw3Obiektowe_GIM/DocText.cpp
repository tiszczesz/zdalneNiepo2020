#include "DocText.h"
#include <iostream>
#include <iomanip>

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

	cout << "  ----------- statystyki dokumentu tekstoego----\n";
	cout << setw(35) << "ilosc lini tekstu: " << setw(6) << getCountLines() << endl;
	cout << setw(35) << "ilosc znakow w tekscie: " << setw(6) << getCountChar() << endl;
	cout << setw(35) << "ilosc liter w tekscie: " << setw(6) << getAlpha() << endl;
	//ilosc samoglosek
	//ilosc wyrazow
}
int DocText::getAlpha() {
	int result{ 0 };
	for (string line : lines) {
		for(int i=0;i<line.size();i++) {
			if (isalpha(line[i])) result++;
		}
	}
	return result;
}


