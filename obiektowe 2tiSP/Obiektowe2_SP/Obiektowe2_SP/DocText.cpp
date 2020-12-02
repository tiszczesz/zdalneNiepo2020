#include "DocText.h"
#include <iostream>
#include <cctype>

DocText::DocText(string name, int size, vector<string> content)
:Document(name,size)
{
	this->content = content;
	cout << "Konstruktor z argumentami klasy DocText" << endl;
}
DocText::DocText()
:Document()
{
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
	cout << "Ilosc znakow: " << getAllChar() << endl;
	cout << "Ilosc liter: " << 2  /*todo*/ << endl;
}
int DocText::getAllChar() {
	int result{ 0 };
	for (string line : content) {
		result += line.size();
	}
	return result;
}
int DocText::getOnlyAlpha() {
	//isalpha()
}




