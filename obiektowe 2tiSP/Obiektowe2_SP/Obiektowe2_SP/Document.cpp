#include "Document.h"
#include <iostream>
Document::Document():name("noname"),size(100) {
	cout << "Konstruktor domyslny" << endl;
}
Document::Document(string name, int size):name(name),size(size) {
	cout << "Konstruktor z argumentami" << endl;
	//this->name = name;
	//this->size = size;
}
void Document::Info() {
	cout << "========Informacja o dokumencie:=======" << endl;
	cout << "nazwa dokumentu: " << name << endl;
	cout << "rozmiar dokumentu: " << size << endl;
}


