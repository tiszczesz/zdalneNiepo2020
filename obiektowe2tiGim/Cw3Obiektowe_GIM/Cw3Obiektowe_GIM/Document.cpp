#include "Document.h"
#include <iostream>
Document::Document()
{
	cout << "Konstruktor domyslny document" << endl;
}
Document::Document(string name, int size)
	:name(name),size(size)
{
	cout << "Konstruktor z argumentami document" << endl;
}
void Document::Info() {
	cout << "=========== DOKUMENT =============\n";
	cout << " nazwa: " << name << endl;
	cout << " rozmiar: " << size << endl;
}

