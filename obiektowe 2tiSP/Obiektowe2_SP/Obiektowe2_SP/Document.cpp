#include "Document.h"
#include <iostream>
Document::Document():name("noname"),size(100) {
	cout << "Konstruktor domyslny klasy document" << endl;
}
Document::Document(string name, int size):name(name),size(size) {
	cout << "Konstruktor z argumentami klasy document" << endl;
	//this->name = name;
	//this->size = size;
	
}
void Document::Info() {
	cout << "\t\t========Informacja o dokumencie:=======" << endl;
	cout << "\t\tnazwa dokumentu: " << name << endl;
	cout << "\t\trozmiar dokumentu: " << size << endl;
}


