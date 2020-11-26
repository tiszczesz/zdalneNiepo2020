#include "DocText.h"
#include <iostream>

DocText::DocText(string name, int size):Document(name,size) {
	cout << "Konstruktor z argumentami DocText" << endl;
	
}
DocText::DocText() {
	cout << "Konstruktor domyslny DocText" << endl;
}
