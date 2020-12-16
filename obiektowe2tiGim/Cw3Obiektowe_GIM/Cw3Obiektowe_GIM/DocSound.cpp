#include "DocSound.h"

#include <iostream>

DocSound::DocSound() {
	length = 2;
	type = TypeOfCoding::mp3;
}
DocSound::DocSound(string name, int size, int length, TypeOfCoding type):Document(name,size) {
	this->length = length;
	this->type = type;
}
void DocSound::Info() {
	Document::Info();
	string typ;
	switch (type) {
	case TypeOfCoding::acc : typ = "Kodowanie acc"; break;
	case TypeOfCoding::mp3: typ = "Kodowanie mp3"; break;
	case TypeOfCoding::flac: typ = "Kodowanie flac"; break;
	case TypeOfCoding::m4a: typ = "Kodowanie m4a"; break;
	case TypeOfCoding::ogg: typ = "Kodowanie ogg"; break;
	default: typ = "Typ nieznany";
	}
	std::cout << " ======================= Informacje o pliku dzwiekowym ========================\n";
	cout << " Czas trwania : " << length << "(sekundy)\n";
	cout << "Typ kodowania: " << typ << endl;
}


